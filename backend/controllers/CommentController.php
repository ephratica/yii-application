<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743, TephrocactusHC 2012026
*  This is the controller class implementing the CRUD actions for Comment model.
*/

namespace backend\controllers;

use backend\models\Comment;
use backend\models\CommentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class CommentController extends Controller
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
                    'only' => ['delete'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['delete'],
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Comment models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CommentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Comment model.
     * @param int $comment_id Comment ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($comment_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($comment_id),
        ]);
    }

    /**
     * Deletes an existing Comment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $comment_id Comment ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($comment_id)
    {
        $this->findModel($comment_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Comment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $comment_id Comment ID
     * @return Comment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($comment_id)
    {
        if (($model = Comment::findOne(['comment_id' => $comment_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
