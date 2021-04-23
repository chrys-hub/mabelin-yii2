<?php

namespace backend\controllers;

use Yii;
use app\models\Barang;
use app\models\BarangSearch;
use app\models\LogModel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BarangController implements the CRUD actions for Barang model.
 */
class BarangController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Barang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BarangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Barang model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Barang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Barang();
        $log = new LogModel();
       
        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->nama_barang;
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            $model->gambar->saveAs('img/'.$imageName.'.'.$model->gambar->extension);
            $model->gambar = $imageName.'.'.$model->gambar->extension;

            //save log
            $user = Yii::$app->user->identity->username;
            $date = date('Y-m-d h:i:s');
            $log->timestamp = $date;
            $log->action = 'Create ' . $imageName;
            $log->user = $user;
            $log->save();
            $model->save(FALSE); //butuh save 2x
            return $this->redirect(['view', 'id' => $model->id_barang]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Barang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $log = new LogModel();
        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->nama_barang;
            $model->gambar = UploadedFile::getInstance($model, 'gambar');
            $model->gambar->saveAs('img/'.$imageName.'.'.$model->gambar->extension);
            $model->gambar = $imageName.'.'.$model->gambar->extension;

            $user = Yii::$app->user->identity->username;
            $date = date('Y-m-d h:i:s');
            $log->timestamp = $date;
            $log->action = 'Update ' . $imageName;
            $log->user = $user;
            $log->save();
            $model->save(FALSE);
            return $this->redirect(['view', 'id' => $model->id_barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Barang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $log = new LogModel();
        $model = $this->findModel($id);
        $imageName = $model->nama_barang;
        $user = Yii::$app->user->identity->username;
        $date = date('Y-m-d h:i:s');
        $log->timestamp = $date;
        $log->action = 'Delete ' . $imageName;
        $log->user = $user;
        $log->save();
        $this->findModel($id)->delete();
        
        return $this->redirect(['index']);
    }

    /**
     * Finds the Barang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Barang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Barang::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
