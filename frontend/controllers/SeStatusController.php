<?php

namespace frontend\controllers;

use frontend\models\SeStatus;
use frontend\models\SeStatusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SeStatusController implements the CRUD actions for SeStatus model.
 */
class SeStatusController extends Controller
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
     * Lists all SeStatus models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SeStatusSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionMetal()
    {
        $searchModel = new SeStatusSearch();
        $dataProvider = $searchModel->searchMetal();

        return $this->render('metal', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionEnergy()
    {
        $searchModel = new SeStatusSearch();
        $dataProvider = $searchModel->searchEnergy();

        return $this->render('energy', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCrop()
    {
        $searchModel = new SeStatusSearch();
        $dataProvider = $searchModel->searchCrop();

        return $this->render('crop', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionFood()
    {
        $searchModel = new SeStatusSearch();
        $dataProvider = $searchModel->searchFood();

        return $this->render('food', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SeStatus model.
     * @param string $Date Date
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Date)
    {
        return $this->render('view', [
            'model' => $this->findModel($Date),
        ]);
    }

    /**
     * Creates a new SeStatus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SeStatus();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Date' => $model->Date]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SeStatus model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Date Date
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Date)
    {
        $model = $this->findModel($Date);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Date' => $model->Date]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SeStatus model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Date Date
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Date)
    {
        $this->findModel($Date)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SeStatus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Date Date
     * @return SeStatus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Date)
    {
        if (($model = SeStatus::findOne(['Date' => $Date])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
