<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model \app\core\entities\Books */

$name = Html::encode($model->name);

$arAuthors = [];
foreach ($model->authors as $authors) {
    $arAuthors[] = Html::a($authors->name, Url::to(['site/author', 'id' => $authors->id]));
}

$this->title = $name;
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $name ?></h1>

<div class="row">
    <div class="col-sm-5 mb">
        <img class="img-thumbnail img-responsive" width="100%" src="<?= $model->getImage() ?>" alt="<?= $name ?>">
    </div>
    <div class="col-sm-7">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Автор:</td>
                    <td><?= implode(', ', $arAuthors) ?></td>
                </tr>
                <tr>
                    <td>ISBN:</td>
                    <td><?= $model->isbn ?></td>
                </tr>
                <tr>
                    <td>Страниц:</td>
                    <td><?= $model->pages ?></td>
                </tr>
                <tr>
                    <td>Вес, г:</td>
                    <td><?= $model->weight ?></td>
                </tr>
                <tr>
                    <td>Переплет:</td>
                    <td><?= $model->binding->name ?></td>
                </tr>
                <tr>
                    <td>Язык:</td>
                    <td><?= $model->language->name ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>



