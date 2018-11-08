<?php

namespace app\models;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $name
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    const RELATION_BOOKS = 'books';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя автора',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::class, ['id' => 'id_book'])->viaTable('books_authors', ['id_author' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\AuthorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\AuthorsQuery(get_called_class());
    }
}
