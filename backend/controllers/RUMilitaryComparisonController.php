<?php

namespace backend\controllers;

use backend\models\RUMilitaryComparison;
use backend\models\RUMilitaryComparisonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * RUMilitaryComparisonController implements the CRUD actions for RUMilitaryComparison model.
 */
class RUMilitaryComparisonController extends Controller
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
     * Lists all RUMilitaryComparison models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RUMilitaryComparisonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RUMilitaryComparison model.
     * @param string $Indicator Indicator
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Indicator)
    {
        return $this->render('view', [
            'model' => $this->findModel($Indicator),
        ]);
    }

    /**
     * Creates a new RUMilitaryComparison model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RUMilitaryComparison();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Indicator' => $model->Indicator]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RUMilitaryComparison model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Indicator Indicator
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Indicator)
    {
        $model = $this->findModel($Indicator);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Indicator' => $model->Indicator]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RUMilitaryComparison model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Indicator Indicator
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Indicator)
    {
        $this->findModel($Indicator)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RUMilitaryComparison model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Indicator Indicator
     * @return RUMilitaryComparison the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Indicator)
    {
        if (($model = RUMilitaryComparison::findOne(['Indicator' => $Indicator])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
