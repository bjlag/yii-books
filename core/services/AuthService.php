<?php

namespace app\core\services;

use app\core\entities\User;
use app\core\forms\LoginForm;
use Yii;

class AuthService
{
    public function login(LoginForm $form): void
    {
        $user = User::findByUsername($form->username);

        if ($user === null || !$user->validatePassword($form->password)) {
            throw new \DomainException('Неверный логин или пароль.');
        }

        Yii::$app->user->login($user, $form->rememberMe ? Yii::$app->params['remember.me'] : 0);
    }

    public function logout(): void
    {
        Yii::$app->user->logout();
    }
}