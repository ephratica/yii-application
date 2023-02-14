<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "SanctionType".
*/
namespace frontend\controllers;

use frontend\models\SanctionType;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

/**
 * SanctionTypeController implements the CRUD actions for SanctionType model.
 */
class SanctionTypeController extends Controller
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
     * Lists all SanctionType models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = SanctionType::find()->asArray()->all();
        $type = ArrayHelper::getColumn($model, 'type');
        $value = ArrayHelper::getColumn($model, 'value');

        return $this->render('index', [
            'type' => $type,
            'value' => $value,
        ]);
    }

    /**
     * Finds the SanctionType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $type Type
     * @return SanctionType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($type)
    {
        if (($model = SanctionType::findOne(['type' => $type])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
