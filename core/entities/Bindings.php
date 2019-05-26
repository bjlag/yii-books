<?php

namespace app\core\entities;

/**
 * This is the model class for table "bindings".
 *
 * @property int $id
 * @property string $name
 *
 * @property Books[] $books
 */
class Bindings extends \yii\db\ActiveRecord
{
    const RELATION_BOOKS = 'books';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bindings';
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
            'name' => 'Название переплета',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::class, ['id_binding' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\core\entities\query\BindingsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new query\BindingsQuery(get_called_class());
    }
}
