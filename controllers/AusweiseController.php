<?php

namespace app\controllers;

use Yii;
use app\models\Ausweise;
use app\models\AusweiseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\db\Exception;
use app\models\Db;

/**
 * AusweiseController implements the CRUD actions for Ausweise model.
 */
class AusweiseController extends Controller
{
    public function behaviors()
    {
         return [
            'access' => [
            'class' => \yii\filters\AccessControl::className(),
            'only' => ['create', 'update'],
            'rules' => [
                // deny all POST requests
                [
                    'allow' => false,
                    'verbs' => ['POST']
                ],
                // allow authenticated users
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
                // everything else is denied
            ],
        ],
             'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['erster'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['letzter'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * Lists all Ausweise models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AusweiseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ausweise model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Ausweise model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ausweise();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ausweise model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Ausweise model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
        
    }
    
    /**
     * Finds the Ausweise model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Ausweise the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ausweise::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionScan() {
        $besucher = new \app\models\Besucher();
        $param = [':ID'=>$_POST['barcode']];
        $db = Yii::$app->db;
        
       try {
        // check whether the primaryKey, which is the input value of the form, was sent.
			if(!isset($param))
				throw new Exception("Es wurde kein Barcode eingescannt!");
				//return $this->redirect(['site/index', 'msg' => 'Es wurde kein Barcode eingescannt!', 'alert' => true]);
				
			$model = $db->createCommand('SELECT * FROM Ausweise WHERE ID=:ID')->bindValues($param)->queryOne();
           
            if ($model !== null) {
                if($model->istAktiv == 0){
                    
                    $model->erstellt= time();
                    $model->istAktiv= 1;
                    $besucher->ID = $besucher->ID + 1;
                    //$besucher->ersterBesuch->time();
                    //$besucher->letzterBesuch->time();
                    $model->save();
                    $this->actionBesucht($model->ID);
                    
                    }else{
                    //$besucher->letzterBesuch->touch('letzterBesuch');
                    //$besucher->save();
                    $model->save();
                    $this->actionBesucht($model->ID);
                }
                
            }
            
            } catch (Exception $ex) {
                return $this->redirect(['site/index', 'msg' => $ex->getMessage(), 'alert' => true]);
            }
       
            }
    protected function actionBesucht($id) {
       $besucht = new \app\models\Besucht();
                
        $besucht->besucher_ID = $id;
        $besucht->Vorstellung_ID = 1;
        $besucht->save();
                
    }
            
}
