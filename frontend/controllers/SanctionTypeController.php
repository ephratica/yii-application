<?php

namespace frontend\controllers;

use frontend\models\SanctionType;
use frontend\models\SanctionTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SanctionTypeController implements the CRUD actions for SanctionType model.
 */
class SanctionTypeController extends Controller
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
     * Lists all SanctionType models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SanctionTypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SanctionType model.
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
     * Creates a new SanctionType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SanctionType();

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
     * Updates an existing SanctionType model.
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
     * Deletes an existing SanctionType model.
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
     * Finds the SanctionType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $type Type
     * @return SanctionType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($type)
    {
        if (($model = SanctionType::findOne(['type' => $type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
