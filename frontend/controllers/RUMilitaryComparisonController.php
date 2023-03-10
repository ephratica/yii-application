<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026 , little5 2011911
*  This is the model class for table "RUMilitaryComparison".
*/
namespace frontend\controllers;

use frontend\models\RUMilitaryComparison;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

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
        $indicator = ArrayHelper::getColumn($model, 'indicator');
        $russia = ArrayHelper::getColumn($model, 'russia');
        $ukraine = ArrayHelper::getColumn($model, 'ukraine');

        return $this->render('index', [
            'indicator' => $indicator,
            'russia' => $russia,
            'ukraine' => $ukraine,
        ]);
    }

}
