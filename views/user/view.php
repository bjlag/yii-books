<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-view">
    <h1>Пользователь: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить имя', ['update-profile', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Изменить пароль', ['update-pass', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'name',
            'access_token',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
