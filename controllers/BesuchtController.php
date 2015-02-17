<?php

namespace app\controllers;

use Yii;
use app\models\Besucht;
use app\models\BesuchtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BesuchtController implements the CRUD actions for Besucht model.
 */
class BesuchtController extends Controller
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
        ];
    }

    /**
     * Lists all Besucht models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BesuchtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Besucht model.
     * @param integer $besucher_ID
     * @param integer $Vorstellung_ID
     * @return mixed
     */
    public function actionView($besucher_ID, $Vorstellung_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($besucher_ID, $Vorstellung_ID),
        ]);
    }

    /**
     * Creates a new Besucht model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Besucht();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'besucher_ID' => $model->besucher_ID, 'Vorstellung_ID' => $model->Vorstellung_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Besucht model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $besucher_ID
     * @param integer $Vorstellung_ID
     * @return mixed
     */
    public function actionUpdate($besucher_ID, $Vorstellung_ID)
    {
        $model = $this->findModel($besucher_ID, $Vorstellung_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'besucher_ID' => $model->besucher_ID, 'Vorstellung_ID' => $model->Vorstellung_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Besucht model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $besucher_ID
     * @param integer $Vorstellung_ID
     * @return mixed
     */
    public function actionDelete($besucher_ID, $Vorstellung_ID)
    {
        $this->findModel($besucher_ID, $Vorstellung_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Besucht model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $besucher_ID
     * @param integer $Vorstellung_ID
     * @return Besucht the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($besucher_ID, $Vorstellung_ID)
    {
        if (($model = Besucht::findOne(['besucher_ID' => $besucher_ID, 'Vorstellung_ID' => $Vorstellung_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
