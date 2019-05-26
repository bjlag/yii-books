<?php

namespace app\core\entities\query;

/**
 * This is the ActiveQuery class for [[\app\core\entities\User]].
 *
 * @see \app\core\entities\User
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /**
     * @param string $username
     * @return UserQuery
     */
    public function byUsername(string $username): self
    {
        return $this->andWhere(['username' => $username]);
    }
}
