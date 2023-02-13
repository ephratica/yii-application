<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "SanctionCountry".
*/
namespace frontend\controllers;

use frontend\models\SanctionCountry;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * SanctionCountryController implements the CRUD actions for SanctionCountry model.
 */
class SanctionCountryController extends Controller
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
     * Lists all SanctionCountry models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = SanctionCountry::find()->asArray()->all();
        $country = ArrayHelper::getColumn($model, 'country');
        $since_2014 = ArrayHelper::getColumn($model, 'since_2014');
        $since_202202 = ArrayHelper::getColumn($model, 'since_202202');

        return $this->render('index', [
            'country' => $country,
            'since_2014' => $since_2014,
            'since_202202' => $since_202202,
        ]);
    }

    public function actionDownload()
    {
        // todo
    }

    /**
     * Finds the SanctionCountry model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $country Country
     * @return SanctionCountry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($country)
    {
        if (($model = SanctionCountry::findOne(['country' => $country])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
