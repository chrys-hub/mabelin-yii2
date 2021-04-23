<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_barang')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textInput() ?>

    <?= $form->field($model, 'kategori')->dropDownList(
         ['Kamar Tidur' => 'Kamar Tidur', 'Ruang Tamu' => 'Ruang Tamu' 
         ,'Ruang Kerja' => 'Ruang Kerja','Ruang Makan' => 'Ruang Makan','Dekorasi' => 'Dekorasi']
    ) ?>

    <?= $form->field($model, 'gambar')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
