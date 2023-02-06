<?php

namespace frontend\controllers;

use frontend\models\UkraineCivilianCasualties;
use frontend\models\UkraineCivilianCasualtiesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UkraineCivilianCasualtiesController implements the CRUD actions for UkraineCivilianCasualties model.
 */
class UkraineCivilianCasualtiesController extends Controller
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
     * Lists all UkraineCivilianCasualties models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UkraineCivilianCasualtiesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UkraineCivilianCasualties model.
     * @param string $Killed_Injured Killed Injured
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Killed_Injured)
    {
        return $this->render('view', [
            'model' => $this->findModel($Killed_Injured),
        ]);
    }

    /**
     * Creates a new UkraineCivilianCasualties model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UkraineCivilianCasualties();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Killed_Injured' => $model->Killed_Injured]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UkraineCivilianCasualties model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Killed_Injured Killed Injured
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Killed_Injured)
    {
        $model = $this->findModel($Killed_Injured);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Killed_Injured' => $model->Killed_Injured]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UkraineCivilianCasualties model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Killed_Injured Killed Injured
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Killed_Injured)
    {
        $this->findModel($Killed_Injured)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UkraineCivilianCasualties model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Killed_Injured Killed Injured
     * @return UkraineCivilianCasualties the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Killed_Injured)
    {
        if (($model = UkraineCivilianCasualties::findOne(['Killed_Injured' => $Killed_Injured])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
