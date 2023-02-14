<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "MilitaryCompareTotal".
*/
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
        $type = ArrayHelper::getColumn($model, 'type');
        $personnel = ArrayHelper::getColumn($model, 'active_military_personnel');
        $aircraft = ArrayHelper::getColumn($model, 'aircraft');
        $vehicles = ArrayHelper::getColumn($model, 'armored_vehicles');
        $fleet = ArrayHelper::getColumn($model, 'naval_fleet');
        $nuclear = ArrayHelper::getColumn($model, 'nuclear_warheads');

        return $this->render('index', [
            'type' => $type,
            'personnel' => $personnel,
            'aircraft' => $aircraft,
            'vehicles' => $vehicles,
            'fleet' => $fleet,
            'nuclear' => $nuclear,
        ]);
    }

}
