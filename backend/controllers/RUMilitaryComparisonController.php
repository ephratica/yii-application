<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the implementing the CRUD actions for table "RUMilitaryComparison".
*/
namespace backend\controllers;

use backend\models\RUMilitaryComparison;
use backend\models\RUMilitaryComparisonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

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
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['create', 'update', 'delete'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['create', 'update', 'delete'],
                            'roles' => ['@'],
                        ],
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
        $searchModel = new RUMilitaryComparisonSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RUMilitaryComparison model.
     * @param string $indicator Indicator
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($indicator)
    {
        return $this->render('view', [
            'model' => $this->findModel($indicator),
        ]);
    }

    /**
     * Creates a new RUMilitaryComparison model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RUMilitaryComparison();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'indicator' => $model->indicator]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RUMilitaryComparison model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $indicator Indicator
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($indicator)
    {
        $model = $this->findModel($indicator);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'indicator' => $model->indicator]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RUMilitaryComparison model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $indicator Indicator
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($indicator)
    {
        $this->findModel($indicator)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RUMilitaryComparison model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $indicator Indicator
     * @return RUMilitaryComparison the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($indicator)
    {
        if (($model = RUMilitaryComparison::findOne(['indicator' => $indicator])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
