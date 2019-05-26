<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \app\core\entities\Books */
/* @var $form yii\widgets\ActiveForm */
/* @var $languages array */
/* @var $bindings array */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pages')->textInput() ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_language')->dropDownList($languages) ?>

    <?= $form->field($model, 'id_binding')->dropDownList($bindings) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'image')->textInput()->hint('Укажите название файла, который лежит в папке upload/books') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
