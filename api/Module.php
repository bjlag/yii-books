<?php

namespace app\api;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->loginUrl = null;
    }
}