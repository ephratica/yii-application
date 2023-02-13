<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the controller class implementing the CRUD actions for Aid model.
*/

namespace frontend\controllers;

use frontend\models\Aid;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

class AidController extends Controller
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
     * Lists all Aid models.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCountry()
    {
        $model = Aid::find()
            ->select('country, sum(value) as sum')
            ->groupBy('country')
            ->having('sum IS NOT NULL')
            ->orderBy('country ASC')
            ->asArray()->all();
        $country = ArrayHelper::getColumn($model, 'country');
        $value = ArrayHelper::getColumn($model, 'sum');

        return $this->render('country', [
            'country' => $country,
            'value' => $value,
        ]);
    }

    public function actionDate()
    {
        $model = Aid::find()
            ->select('date, sum(value) as value')
            ->where('date IS NOT NULL')
            ->groupBy('date')
            ->orderBy('date ASC')
            ->asArray()->all();
        $date = ArrayHelper::getColumn($model, 'date');
        $value = ArrayHelper::getColumn($model, 'value');

        return $this->render('date', [
            'date' => $date,
            'value' => $value,
        ]);
    }

    public function actionType()
    {
        $model = Aid::find()
            ->select('type, sum(value) as value')
            ->groupBy('type')
            ->orderBy('type ASC')
            ->asArray()->all();
        $type = ArrayHelper::getColumn($model, 'type');
        $value = ArrayHelper::getColumn($model, 'value');

        return $this->render('type', [
            'type' => $type,
            'value' => $value,
        ]);
    }

    public function actionDownload()
    {
        // todo
    }
}
