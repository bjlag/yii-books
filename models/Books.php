<?php

namespace app\models;

use yii\helpers\Url;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $pages
 * @property string $isbn
 * @property int $id_language
 * @property int $id_binding
 * @property int $weight
 *
 * @property Bindings $binding
 * @property Languages $language
 * @property Authors[] $authors
 */
class Books extends \yii\db\ActiveRecord
{
    const RELATION_BINDING = 'binding';
    const RELATION_LANGUAGE = 'language';
    const RELATION_AUTHORS = 'authors';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'pages', 'isbn', 'id_language', 'id_binding', 'weight'], 'required'],
            [['pages', 'id_language', 'id_binding', 'weight'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 75],
            [['isbn'], 'string', 'max' => 17],
            [['id_binding'], 'exist', 'skipOnError' => true, 'targetClass' => Bindings::class, 'targetAttribute' => ['id_binding' => 'id']],
            [['id_language'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::class, 'targetAttribute' => ['id_language' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название книги',
            'image' => 'Обложка',
            'pages' => 'Страниц',
            'isbn' => 'ISBN',
            'id_language' => 'Язык',
            'id_binding' => 'Переплет',
            'weight' => 'Вес',
            'authors.name' => 'Авторство'
        ];
    }

    public function getImage()
    {
        return ($this->image ? Url::to("@upload/books/{$this->image}") : Url::to('@upload/noimage.jpg'));
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBinding()
    {
        return $this->hasOne(Bindings::class, ['id' => 'id_binding']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Languages::class, ['id' => 'id_language']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthors()
    {
        return $this->hasMany(Authors::class, ['id' => 'id_author'])->viaTable('books_authors', ['id_book' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\BooksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\BooksQuery(get_called_class());
    }

    public function fields()
    {
        return [
            'id',
            'name',
            'image' => function (Books $model) {
                return $model->getImage();
            },
            'pages',
            'isbn',
            'weight',
            'language',
            'binding',
            'authors'
        ];
    }
}
