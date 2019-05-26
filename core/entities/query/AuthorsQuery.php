<?php

namespace app\core\entities\query;

/**
 * This is the ActiveQuery class for [[\app\core\entities\Authors]].
 *
 * @see \app\core\entities\Authors
 */
class AuthorsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\core\entities\Authors[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\core\entities\Authors|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
