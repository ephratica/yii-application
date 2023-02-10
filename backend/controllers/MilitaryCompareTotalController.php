<?php

namespace backend\controllers;

use backend\models\MilitaryCompareTotal;
use backend\models\MilitaryCompareTotalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * MilitaryCompareTotalController implements the CRUD actions for MilitaryCompareTotal model.
 */
class MilitaryCompareTotalController extends Controller
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
     * Lists all MilitaryCompareTotal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MilitaryCompareTotalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MilitaryCompareTotal model.
     * @param string $type Type
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($type)
    {
        return $this->render('view', [
            'model' => $this->findModel($type),
        ]);
    }

    /**
     * Creates a new MilitaryCompareTotal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MilitaryCompareTotal();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'type' => $model->type]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MilitaryCompareTotal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $type Type
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($type)
    {
        $model = $this->findModel($type);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'type' => $model->type]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MilitaryCompareTotal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $type Type
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($type)
    {
        $this->findModel($type)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MilitaryCompareTotal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $type Type
     * @return MilitaryCompareTotal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($type)
    {
        if (($model = MilitaryCompareTotal::findOne(['type' => $type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
