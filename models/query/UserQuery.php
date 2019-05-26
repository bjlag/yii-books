<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\core\entities\User]].
 *
 * @see \app\core\entities\User
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /**
     * {@inheritdoc}
     * @return \app\core\entities\User[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\core\entities\User|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param string $username
     * @return UserQuery
     */
    public function byUsername($username)
    {
        return $this->where(['username' => $username]);
    }
}
