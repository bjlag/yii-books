<?php

namespace tests\models;

use app\core\entities\User;
use app\tests\fixtures\UserFixture;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $this->tester->haveFixtures([
            'user' => [
                'class' => UserFixture::class,
            ]
        ]);
    }

    public function testFindUserById()
    {
        /** @var User $user */
        expect_that($user = \app\core\entities\User::findIdentity(100));
        expect($user->username)->equals('admin');

        expect_not(\app\core\entities\User::findIdentity(999));
    }

    public function testFindUserByAccessToken()
    {
        /** @var \app\core\entities\User $user */
        expect_that($user = \app\core\entities\User::findIdentityByAccessToken('100-token'));
        expect($user->username)->equals('admin');

        expect_not(\app\core\entities\User::findIdentityByAccessToken('non-existing'));
    }

    public function testFindUserByUsername()
    {
        expect_that($user = \app\core\entities\User::findByUsername('admin'));
        expect_not(\app\core\entities\User::findByUsername('not-admin'));
    }

    /**
     * @depends testFindUserByUsername
     */
    public function testValidateUser($user)
    {
        $user = \app\core\entities\User::findByUsername('admin');
        expect_that($user->validateAuthKey('test100key'));
        expect_not($user->validateAuthKey('test102key'));

        expect_that($user->validatePassword('admin'));
        expect_not($user->validatePassword('123456'));        
    }

}
