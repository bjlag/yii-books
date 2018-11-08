<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Каталог книг';
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'itemView' => '_book',
    'itemOptions' => [
        'tag' => false,
    ],
    'options' => [
        'class' => 'row row-flex row-flex-wrap'
    ]
]); ?>
