<?php

namespace app\api\controllers;

use app\models\Books;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;

/**
 * Класс для работы с таблицей 'books' через REST API.
 * @package app\api\controllers
 */
class BooksController extends ActiveController
{
    public $modelClass = Books::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['contentNegotiator'] = [
            'class' => ContentNegotiator::class,
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

        $behaviors['authenticator'] = [
            'class' => HttpBasicAuth::class,
        ];

        return $behaviors;
    }
}