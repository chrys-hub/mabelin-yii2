<?php

/* @var $this yii\web\View */
use  yii\helpers\Html;
$this->title = 'Mabelin Admin';
?>
<div class="site-index">

    <div class="jumbotron" style="height:80vh;">
        <h1>Welcome,
        <?php 
         $adminname=Yii::$app->user->identity->username;
        echo $adminname;
        ?>
        </h1>

        <p class="lead">This is admin page,use the tools listed in side bar</p>
        <p class="lead">,Or start with</p>
        <p>
        <?= Html::a('Manage Data', ['/barang'],['class' => 'btn btn-lg btn-success']) ?>
        </p>
    </div>
</div>
