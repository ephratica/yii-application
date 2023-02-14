<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "UkraineRoundTrip".
*/
namespace frontend\controllers;

use frontend\models\UkraineRoundTrip;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

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
        $type = ArrayHelper::getColumn($model, 'type');
        $num = ArrayHelper::getColumn($model, 'num');

        return $this->render('index', [
            'type' => $type,
            'num' => $num,
        ]);
    }

    /**
     * Finds the UkraineRoundTrip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $type Type
     * @return UkraineRoundTrip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($type)
    {
        if (($model = UkraineRoundTrip::findOne(['type' => $type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
