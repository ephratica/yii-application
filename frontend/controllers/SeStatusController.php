<?php

namespace frontend\controllers;

use frontend\models\SeStatus;
use frontend\models\SeStatusSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

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
        // $searchModel = new SeStatusSearch();
        // $dataProvider = $searchModel->searchMetal();
        $model= SeStatus::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model,'Date');
        $gold = ArrayHelper::getColumn($model,'GOLD');
        $copper = ArrayHelper::getColumn($model,'COPPER');
        $silver = ArrayHelper::getColumn($model,'SILVER');
        $aluminium = ArrayHelper::getColumn($model,'ALUMINIUM');
        $zinc = ArrayHelper::getColumn($model,'ZINC');
        $nickel = ArrayHelper::getColumn($model,'NICKEL');

        return $this->render('metal', [
            'date' => $date,
            'gold' => $gold,
            'copper' => $copper,
            'silver' => $silver,
            'aluminium' => $aluminium,
            'zinc' => $zinc,
            'nickel' => $nickel,
        ]);
    }

    public function actionEnergy()
    {
        // $searchModel = new SeStatusSearch();
        // $dataProvider = $searchModel->searchEnergy();
        $model= SeStatus::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model,'Date');
        $natural_gas = ArrayHelper::getColumn($model,'NATURAL_GAS');
        $wti_crude = ArrayHelper::getColumn($model,'WTI_CRUDE');
        $brent_crude = ArrayHelper::getColumn($model,'BRENT_CRUDE');
        $low_sulphur_gas_oil = ArrayHelper::getColumn($model,'LOW_SULPHUR_GAS_OIL');
        $soybean_oil = ArrayHelper::getColumn($model,'SOYBEAN_OIL');
        $uls_diesel = ArrayHelper::getColumn($model,'ULS_DIESEL');
        $gasoline = ArrayHelper::getColumn($model,'GASOLINE');

        return $this->render('energy', [
            'date' => $date,
            'natural_gas' => $natural_gas,
            'wti_crude' => $wti_crude,
            'brent_crude' => $brent_crude,
            'low_sulphur_gas_oil' => $low_sulphur_gas_oil,
            'soybean_oil' => $soybean_oil,
            'uls_diesel' => $uls_diesel,
            'gasoline' => $gasoline,
        ]);
    }

    public function actionCrop()
    {
        // $searchModel = new SeStatusSearch();
        // $dataProvider = $searchModel->searchCrop();
        $model= SeStatus::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model,'Date');
        $soybeans = ArrayHelper::getColumn($model,'SOYBEANS');
        $corn = ArrayHelper::getColumn($model,'CORN');
        $wheat = ArrayHelper::getColumn($model,'WHEAT');
        $hrw_wheat = ArrayHelper::getColumn($model,'HRW_WHEAT');
        $cotton = ArrayHelper::getColumn($model,'COTTON');

        return $this->render('crop', [
            'date' => $date,
            'soybeans' => $soybeans,
            'corn' => $corn,
            'wheat' => $wheat,
            'hrw_wheat' => $hrw_wheat,
            'cotton' => $cotton,
        ]);
    }

    public function actionFood()
    {
        // $searchModel = new SeStatusSearch();
        // $dataProvider = $searchModel->searchFood();
        $model= SeStatus::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model,'Date');
        $live_cattle = ArrayHelper::getColumn($model,'LIVE_CATTLE');
        $soybean_meal = ArrayHelper::getColumn($model,'SOYBEAN_MEAL');
        $sugar = ArrayHelper::getColumn($model,'SUGAR');
        $coffee = ArrayHelper::getColumn($model,'COFFEE');
        $lean_hogs = ArrayHelper::getColumn($model,'LEAN_HOGS');

        return $this->render('food', [
            'date' => $date,
            'live_cattle' => $live_cattle,
            'soybean_meal' => $soybean_meal,
            'sugar' => $sugar,
            'coffee' => $coffee,
            'lean_hogs' => $lean_hogs,
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
