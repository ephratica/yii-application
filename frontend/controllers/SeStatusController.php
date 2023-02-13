<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the controller class implementing the CRUD actions for SeStatus model.
*/

namespace frontend\controllers;

use frontend\models\SeStatus;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

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
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['download'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['download'],
                            'roles' => ['@'],
                        ],
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
        return $this->render('index');
    }

    public function actionMetal()
    {
        // $searchModel = new SeStatusSearch();
        // $dataProvider = $searchModel->searchMetal();
        $model= SeStatus::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model,'date');
        $gold = ArrayHelper::getColumn($model,'gold');
        $copper = ArrayHelper::getColumn($model,'copper');
        $silver = ArrayHelper::getColumn($model,'silver');
        $aluminium = ArrayHelper::getColumn($model,'aluminium');
        $zinc = ArrayHelper::getColumn($model,'zinc');
        $nickel = ArrayHelper::getColumn($model,'nickel');

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
        $date = ArrayHelper::getColumn($model,'date');
        $natural_gas = ArrayHelper::getColumn($model,'natural_gas');
        $wti_crude = ArrayHelper::getColumn($model,'wti_crude');
        $brent_crude = ArrayHelper::getColumn($model,'brent_crude');
        $low_sulphur_gas_oil = ArrayHelper::getColumn($model,'low_sulphur_gas_oil');
        $uls_diesel = ArrayHelper::getColumn($model,'uls_diesel');
        $gasoline = ArrayHelper::getColumn($model,'gasoline');

        return $this->render('energy', [
            'date' => $date,
            'natural_gas' => $natural_gas,
            'wti_crude' => $wti_crude,
            'brent_crude' => $brent_crude,
            'low_sulphur_gas_oil' => $low_sulphur_gas_oil,
            'uls_diesel' => $uls_diesel,
            'gasoline' => $gasoline,
        ]);
    }

    public function actionCrop()
    {
        // $searchModel = new SeStatusSearch();
        // $dataProvider = $searchModel->searchCrop();
        $model= SeStatus::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model,'date');
        $soybeans = ArrayHelper::getColumn($model,'soybeans');
        $corn = ArrayHelper::getColumn($model,'corn');
        $wheat = ArrayHelper::getColumn($model,'wheat');
        $hrw_wheat = ArrayHelper::getColumn($model,'hrw_wheat');
        $cotton = ArrayHelper::getColumn($model,'cotton');

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
        $date = ArrayHelper::getColumn($model,'date');
        $live_cattle = ArrayHelper::getColumn($model,'live_cattle');
        $soybean_oil = ArrayHelper::getColumn($model,'soybean_oil');
        $soybean_meal = ArrayHelper::getColumn($model,'soybean_meal');
        $sugar = ArrayHelper::getColumn($model,'sugar');
        $coffee = ArrayHelper::getColumn($model,'coffee');
        $lean_hogs = ArrayHelper::getColumn($model,'lean_hogs');

        return $this->render('food', [
            'date' => $date,
            'live_cattle' => $live_cattle,
            'soybean_oil' => $soybean_oil,
            'soybean_meal' => $soybean_meal,
            'sugar' => $sugar,
            'coffee' => $coffee,
            'lean_hogs' => $lean_hogs,
        ]);
    }

    /**
     * Finds the SeStatus model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $date Date
     * @return SeStatus the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($date)
    {
        if (($model = SeStatus::findOne(['date' => $date])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
