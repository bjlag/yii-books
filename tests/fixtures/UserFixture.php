<?php

namespace app\tests\fixtures;

use app\core\entities\User;
use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    public $modelClass = User::class;
    public $dataFile = '@tests/fixtures/data/user.php';
}