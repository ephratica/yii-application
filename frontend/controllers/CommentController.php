<?php
/**
*  Team: Untitled, NKU
*  Coding by TephrocactusHC 2012026
*  This is the model class for table "comment".
*/
namespace frontend\controllers;

use Yii;
use frontend\models\Comment;
use frontend\models\CommentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CommentController implements the CRUD actions for Comment model.
 */
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
                    'only' => ['create'],
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => ['create'],
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
     * Creates a new Comment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Comment();

        if ($model->load(Yii::$app->request->post())) {
            // $mypost = isset($GLOBALS['HTTP_RAW_POST_DATA'])?$GLOBALS['HTTP_RAW_POST_DATA']:file_get_contents("php://input");
            // $postdata = json_decode($mypost);
            // $model->discuss = $postdata->Comment->discuss;
            // $model->discuss = $_POST['Comment']['discuss'];
            $model->discuss = $model->getContent();
            $model->username = Yii::$app->user->identity->username;
            $model->comment_time = date('Y-m-d H-i-s', time());
            if ($model->save()) {
                return $this->redirect([['view', 'comment_id' => $model->comment_id],['view', 'comment_id' => $model->comment_id]]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
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
