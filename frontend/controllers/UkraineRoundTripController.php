<?php

namespace frontend\controllers;

use frontend\models\UkraineRoundTrip;
use frontend\models\UkraineRoundTripSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * UkraineRoundTripController implements the CRUD actions for UkraineRoundTrip model.
 */
class UkraineRoundTripController extends Controller
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
                    'only' => ['ceate', 'update', 'delete'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['ceate', 'update', 'delete'],
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all UkraineRoundTrip models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UkraineRoundTripSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UkraineRoundTrip model.
     * @param string $Type Type
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Type)
    {
        return $this->render('view', [
            'model' => $this->findModel($Type),
        ]);
    }

    /**
     * Creates a new UkraineRoundTrip model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UkraineRoundTrip();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Type' => $model->Type]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UkraineRoundTrip model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Type Type
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Type)
    {
        $model = $this->findModel($Type);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Type' => $model->Type]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UkraineRoundTrip model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Type Type
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Type)
    {
        $this->findModel($Type)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UkraineRoundTrip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Type Type
     * @return UkraineRoundTrip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Type)
    {
        if (($model = UkraineRoundTrip::findOne(['Type' => $Type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
