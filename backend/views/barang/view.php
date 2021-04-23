<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_barang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_barang',
            'nama_barang',
            'harga_barang',
            'deskripsi',
            'kategori',
            [

                'attribute' => 'gambar',
    
                'format' => 'html',
    
                'label' => 'gambar',
    
                'value' => function ($model) {
    
                    return Html::img(Yii::$app->request->baseUrl.'/../../backend/web/img/'. $model['gambar'],
    
                        ['width' => '130px']);
    
                },
    
            ],
        ],
    ]) ?>

</div>
