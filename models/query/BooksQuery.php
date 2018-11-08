<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Books]].
 *
 * @see \app\models\Books
 */
class BooksQuery extends \yii\db\ActiveQuery
{
    /**
     * @param $id
     * @return BooksQuery
     */
    public function byId($id)
    {
        return $this->where(['books.id' => $id]);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Books[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Books|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
