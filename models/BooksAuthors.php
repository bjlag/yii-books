<?php

namespace app\models;

/**
 * This is the model class for table "books_authors".
 *
 * @property int $id_book
 * @property int $id_author
 *
 * @property Authors $author
 * @property Books $book
 */
class BooksAuthors extends \yii\db\ActiveRecord
{
    const RELATION_AUTHOR = 'author';
    const RELATION_BOOK = 'book';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books_authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_book', 'id_author'], 'required'],
            [['id_book', 'id_author'], 'integer'],
            [['id_book', 'id_author'], 'unique', 'targetAttribute' => ['id_book', 'id_author']],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::class, 'targetAttribute' => ['id_author' => 'id']],
            [['id_book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::class, 'targetAttribute' => ['id_book' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id Book',
            'id_author' => 'Id Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Authors::class, ['id' => 'id_author']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::class, ['id' => 'id_book']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\BooksAuthorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\BooksAuthorsQuery(get_called_class());
    }
}
