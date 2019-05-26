<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model \app\core\entities\Authors */
?>

<div class="col-xs-12 col-md-6 col-lg-4">
    <div class="thumbnail">
        <div class="caption">
            <a href="<?= Url::to(['site/author', 'id' => $model->id]) ?>">
                <h4><?= Html::encode($model->name) . ' (' . count($model->books) . ')' ?></h4>
            </a>
        </div>
    </div>
</div>
