<?php

namespace app\controllers;

use Yii;
use app\models\Languages;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Контроллер для работы с моделью Languages.
 */
class LanguagesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Вывод списка моделей Languages.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Languages::find(),
            'pagination' => [
                'pageSize' => Yii::$app->params['paginationSize'],
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Вывод подробного описания модели Languages.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Создание новой модели Languages.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Languages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Обновление информации в существующей модели Languages.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Удаление существующей модели Languages.
     * Перед удалением проверяем, что у модели нет связей с моделью Books.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if (!$model->books) {
            $this->findModel($id)->delete();
        } else {
            Yii::$app->session->setFlash('error', 'Есть ссылки на книги! Удалите связи с ними перед удалением.');
        }

        return $this->redirect(['index']);
    }

    /**
     * Поиск модели Languages по порвичному ключу.
     * @param integer $id
     * @return Languages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Languages::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Страница не найдена');
    }
}
