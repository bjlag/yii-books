<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \app\models\Books */

$name = Html::encode($model->name);
$arAuthors = [];
foreach ($model->authors as $authors) {
    $arAuthors[] = $authors->name;
}
?>

<div class="col-xs-12 col-md-6 col-lg-4">
    <div class="thumbnail">
        <a href="<?= \yii\helpers\Url::to(['site/book', 'id' => $model->id]) ?>">
            <img src="<?= $model->getImage() ?>" alt="<?= $name ?>">
        </a>
        <div class="caption">
            <h4><?= $name ?></h4>
            <p><?= implode(', ', $arAuthors) ?></p>
            <p>
                <a href="<?= \yii\helpers\Url::to(['site/book', 'id' => $model->id]) ?>"
                   class="btn btn-primary" role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>










