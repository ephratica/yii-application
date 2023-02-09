<?php

namespace frontend\controllers;

use frontend\models\UkraineRoundTrip;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * UkraineRoundTripController implements the CRUD actions for UkraineRoundTrip model.
 */
class UkraineRoundTripController extends Controller
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
     * Lists all UkraineRoundTrip models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = UkraineRoundTrip::find()->asArray()->all();
        $type = ArrayHelper::getColumn($model, 'Type');
        $num = ArrayHelper::getColumn($model, 'Num');

        return $this->render('index', [
            'type' => $type,
            'num' => $num,
        ]);
    }

    public function actionDownload()
    {
        // todo
    }

    /**
     * Finds the UkraineRoundTrip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Type Type
     * @return UkraineRoundTrip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Type)
    {
        if (($model = UkraineRoundTrip::findOne(['Type' => $Type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
