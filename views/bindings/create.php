<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \app\core\entities\Bindings */

$this->title = 'Create Bindings';
$this->params['breadcrumbs'][] = ['label' => 'Bindings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="bindings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
