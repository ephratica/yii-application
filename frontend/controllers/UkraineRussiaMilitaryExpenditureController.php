<?php

namespace frontend\controllers;

use frontend\models\UkraineRussiaMilitaryExpenditure;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * UkraineRussiaMilitaryExpenditureController implements the CRUD actions for UkraineRussiaMilitaryExpenditure model.
 */
class UkraineRussiaMilitaryExpenditureController extends Controller
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
     * Lists all UkraineRussiaMilitaryExpenditure models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = UkraineRussiaMilitaryExpenditure::find()->asArray()->all();
        $year = ArrayHelper::getColumn($model, 'Year');
        $russia = ArrayHelper::getColumn($model, 'Russia');
        $ukraine = ArrayHelper::getColumn($model, 'Ukraine');

        return $this->render('index', [
            'year' => $year,
            'russia' => $russia,
            'ukraine' => $ukraine,
        ]);
    }

    public function actionDownload()
    {
        // todo
    }

    /**
     * Finds the UkraineRussiaMilitaryExpenditure model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Year Year
     * @return UkraineRussiaMilitaryExpenditure the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Year)
    {
        if (($model = UkraineRussiaMilitaryExpenditure::findOne(['Year' => $Year])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
