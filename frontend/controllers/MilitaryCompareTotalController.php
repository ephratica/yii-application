<?php

namespace frontend\controllers;

use frontend\models\MilitaryCompareTotal;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
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
     * Lists all MilitaryCompareTotal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = MilitaryCompareTotal::find()->asArray()->all();
        $type = ArrayHelper::getColumn($model, 'Type');
        $personnel = ArrayHelper::getColumn($model, 'Active_military_personnel');
        $aircraft = ArrayHelper::getColumn($model, 'Aircraft');
        $vehicles = ArrayHelper::getColumn($model, 'Armored_vehicles');
        $fleet = ArrayHelper::getColumn($model, 'Naval_fleet');
        $nuclear = ArrayHelper::getColumn($model, 'Nuclear_warheads');

        return $this->render('index', [
            'type' => $type,
            'personnel' => $personnel,
            'aircraft' => $aircraft,
            'vehicles' => $vehicles,
            'fleet' => $fleet,
            'nuclear' => $nuclear,
        ]);
    }

    public function actionDownload()
    {
        // todo
    }

}
