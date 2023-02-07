<?php

namespace frontend\controllers;

use frontend\models\UkraineCivilianCasualties;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

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
     * Lists all UkraineCivilianCasualties models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = UkraineCivilianCasualties::find()->asArray()->all();
        $type = ArrayHelper::getColumn($model, 'Killed/Injured');
        $total = ArrayHelper::getColumn($model, 'Total');
        $children = ArrayHelper::getColumn($model, 'Children');

        return $this->render('index', [
            'type' => $type,
            'total' => $total,
            'children' => $children,
        ]);
    }

    public function actionDownload()
    {
        // todo
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
