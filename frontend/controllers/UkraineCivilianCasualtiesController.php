<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "UkraineCivilianCasualties".
*/
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
        $type = ArrayHelper::getColumn($model, 'type');
        $total = ArrayHelper::getColumn($model, 'total');
        $children = ArrayHelper::getColumn($model, 'children');

        return $this->render('index', [
            'type' => $type,
            'total' => $total,
            'children' => $children,
        ]);
    }

    /**
     * Finds the UkraineCivilianCasualties model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $type Type
     * @return UkraineCivilianCasualties the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($type)
    {
        if (($model = UkraineCivilianCasualties::findOne(['type' => $type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
