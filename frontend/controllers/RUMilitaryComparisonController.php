<?php

namespace frontend\controllers;

use frontend\models\RUMilitaryComparison;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * RUMilitaryComparisonController implements the CRUD actions for RUMilitaryComparison model.
 */
class RUMilitaryComparisonController extends Controller
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
     * Lists all RUMilitaryComparison models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = RUMilitaryComparison::find()->asArray()->all();
        $indicator = ArrayHelper::getColumn($model, 'Indicator');
        $russia = ArrayHelper::getColumn($model, 'Russia');
        $ukraine = ArrayHelper::getColumn($model, 'Ukraine');

        return $this->render('index', [
            'indicator' => $indicator,
            'russia' => $russia,
            'ukraine' => $ukraine,
        ]);
    }

    public function actionDownload()
    {
        // todo
    }

}
