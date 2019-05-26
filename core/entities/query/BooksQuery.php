<?php

namespace app\core\entities\query;

/**
 * This is the ActiveQuery class for [[\app\core\entities\Books]].
 *
 * @see \app\core\entities\Books
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
     * @return \app\core\entities\Books[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\core\entities\Books|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
