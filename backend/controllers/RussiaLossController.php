<?php

namespace backend\controllers;

use backend\models\RussiaLoss;
use backend\models\RussiaLossSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * RussiaLossController implements the CRUD actions for RussiaLoss model.
 */
class RussiaLossController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['create', 'update', 'delete'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['create', 'update', 'delete'],
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all RussiaLoss models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RussiaLossSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RussiaLoss model.
     * @param string $date Date
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($date)
    {
        return $this->render('view', [
            'model' => $this->findModel($date),
        ]);
    }

    /**
     * Creates a new RussiaLoss model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RussiaLoss();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'date' => $model->date]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RussiaLoss model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $date Date
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($date)
    {
        $model = $this->findModel($date);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'date' => $model->date]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RussiaLoss model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $date Date
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($date)
    {
        $this->findModel($date)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RussiaLoss model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $date Date
     * @return RussiaLoss the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($date)
    {
        if (($model = RussiaLoss::findOne(['date' => $date])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
