<?php

namespace app\core\entities\query;

/**
 * This is the ActiveQuery class for [[\app\core\entities\Languages]].
 *
 * @see \app\core\entities\Languages
 */
class LanguagesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\core\entities\Languages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\core\entities\Languages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
