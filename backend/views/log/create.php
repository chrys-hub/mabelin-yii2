<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LogModel */

$this->title = 'Create Log Model';
$this->params['breadcrumbs'][] = ['label' => 'Log Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
