<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Bindings]].
 *
 * @see \app\models\Bindings
 */
class BindingsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Bindings[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Bindings|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
