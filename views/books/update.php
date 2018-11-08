<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $languages array */
/* @var $bindings array */

$this->title = 'Книга: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>

<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'languages' => $languages,
        'bindings' => $bindings
    ]) ?>

</div>
