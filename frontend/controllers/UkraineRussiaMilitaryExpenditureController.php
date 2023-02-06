<?php

namespace frontend\controllers;

use frontend\models\UkraineRussiaMilitaryExpenditure;
use frontend\models\UkraineRussiaMilitaryExpenditureSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UkraineRussiaMilitaryExpenditureController implements the CRUD actions for UkraineRussiaMilitaryExpenditure model.
 */
class UkraineRussiaMilitaryExpenditureController extends Controller
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
            ]
        );
    }

    /**
     * Lists all UkraineRussiaMilitaryExpenditure models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UkraineRussiaMilitaryExpenditureSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UkraineRussiaMilitaryExpenditure model.
     * @param int $Year Year
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Year)
    {
        return $this->render('view', [
            'model' => $this->findModel($Year),
        ]);
    }

    /**
     * Creates a new UkraineRussiaMilitaryExpenditure model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UkraineRussiaMilitaryExpenditure();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Year' => $model->Year]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UkraineRussiaMilitaryExpenditure model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Year Year
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Year)
    {
        $model = $this->findModel($Year);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Year' => $model->Year]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UkraineRussiaMilitaryExpenditure model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Year Year
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Year)
    {
        $this->findModel($Year)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UkraineRussiaMilitaryExpenditure model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Year Year
     * @return UkraineRussiaMilitaryExpenditure the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Year)
    {
        if (($model = UkraineRussiaMilitaryExpenditure::findOne(['Year' => $Year])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
