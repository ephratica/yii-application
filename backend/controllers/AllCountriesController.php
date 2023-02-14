<?php

/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the implementing the CRUD actions for AllCountries model.
*/

namespace backend\controllers;

use backend\models\AllCountries;
use backend\models\AllCountriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class AllCountriesController extends Controller
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
     * Lists all AllCountries models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AllCountriesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AllCountries model.
     * @param string $country Country
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($country)
    {
        return $this->render('view', [
            'model' => $this->findModel($country),
        ]);
    }

    /**
     * Creates a new AllCountries model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AllCountries();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'country' => $model->country]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AllCountries model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $country Country
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($country)
    {
        $model = $this->findModel($country);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'country' => $model->country]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AllCountries model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $country Country
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($country)
    {
        $this->findModel($country)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AllCountries model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $country Country
     * @return AllCountries the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($country)
    {
        if (($model = AllCountries::findOne(['country' => $country])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
