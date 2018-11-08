<?php

namespace app\models;

/**
 * This is the model class for table "languages".
 *
 * @property int $id
 * @property string $name
 *
 * @property Books[] $books
 */
class Languages extends \yii\db\ActiveRecord
{
    const RELATION_BOOKS = 'books';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'languages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Язык',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::class, ['id_language' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\LanguagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\LanguagesQuery(get_called_class());
    }
}
