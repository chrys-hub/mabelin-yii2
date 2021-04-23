<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Manager';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_barang',
            'nama_barang',
            'harga_barang',
            'kategori',
            'deskripsi',
            [

                'attribute' => 'gambar',
    
                'format' => 'html',
    
                'label' => 'gambar',
    
                'value' => function ($model) {
    
                    return Html::img('img/' . $model['gambar'],
    
                        ['width' => '130px']);
    
                },
    
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
