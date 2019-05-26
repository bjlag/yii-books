<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\core\entities\BooksAuthors */
/* @var $modelBook \app\core\entities\Books */
/* @var $authors array */

$this->title = 'Добавить автора';
$this->params['breadcrumbs'][] = ['label' => 'Книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $modelBook->name, 'url' => ['view', 'id' => $modelBook->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>

<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_author')->dropDownList($authors)->label("Выберите автора для книги: {$modelBook->name}") ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
