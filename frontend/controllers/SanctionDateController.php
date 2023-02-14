<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "SanctionDate".
*/
namespace frontend\controllers;

use frontend\models\SanctionDate;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * SanctionDateController implements the CRUD actions for SanctionDate model.
 */
class SanctionDateController extends Controller
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

    public function actionIndex()
    {
        $model = SanctionDate::find()->asArray()->all();
        $date = ArrayHelper::getColumn($model, 'date');
        $value = ArrayHelper::getColumn($model, 'value');

        return $this->render('index', [
            'date' => $date,
            'value' => $value,
        ]);
    }

    /**
     * Finds the SanctionDate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $date Date
     * @return SanctionDate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($date)
    {
        if (($model = SanctionDate::findOne(['date' => $date])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
