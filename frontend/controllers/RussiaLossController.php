<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743 , little5 2011911
*  This is the controller class implementing the CRUD actions for RussiaLoss model.
*/

namespace frontend\controllers;

use frontend\models\RussiaLoss;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

class RussiaLossController extends Controller
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
     * Lists all RussiaLoss models.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEquipment()
    {
        $model = RussiaLoss::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model, 'date');
        $tank = ArrayHelper::getColumn($model, 'tank');
        $bbm = ArrayHelper::getColumn($model, 'bbm');
        $artillery = ArrayHelper::getColumn($model, 'artillery');
        $rocket = ArrayHelper::getColumn($model, 'multi_barrel_rocket_launcher');
        $air_defense = ArrayHelper::getColumn($model, 'air_defense_system');
        $fixed_wing_aircraft = ArrayHelper::getColumn($model, 'fixed_wing_aircraft');
        $helicopter = ArrayHelper::getColumn($model, 'helicopter');
        $uav = ArrayHelper::getColumn($model, 'uav');
        $cruise_missile = ArrayHelper::getColumn($model, 'cruise_missile');
        $ships = ArrayHelper::getColumn($model, 'ships');
        $automobile_and_oil_tanker = ArrayHelper::getColumn($model, 'automobile_and_oil_tanker');
        $special = ArrayHelper::getColumn($model, 'special_equipment');

        return $this->render('equipment', [
            'date' => $date,
            'tank' => $tank,
            'bbm' => $bbm,
            'artillery' => $artillery,
            'rocket' => $rocket,
            'air_defense' => $air_defense,
            'fixed_wing_aircraft' => $fixed_wing_aircraft,
            'helicopter' => $helicopter,
            'uav' => $uav,
            'cruise_missile' => $cruise_missile,
            'ships' => $ships,
            'automobile_and_oil_tanker' => $automobile_and_oil_tanker,
            'special' => $special,
        ]);
    }

    public function actionPersonnel()
    {
        $model = RussiaLoss::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model, 'date');
        $total = ArrayHelper::getColumn($model, 'personnel_total');
        $increase = ArrayHelper::getColumn($model, 'personnel_increase');

        return $this->render('personnel', [
            'date' => $date,
            'total' => $total,
            'increase' => $increase,
        ]);
    }

}
