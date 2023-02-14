<?php

use frontend\models\Comment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CommentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>

<link rel="stylesheet" href="/css/timeline.css">

<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row d-flex">
        <div class="mt-5 card bg-light border-light p-5" style="border-radius: 50px;">
            <h2>网友评论</h2>

            <div class="timeline w-100">
                <div class="timeline-outer">
                    <?php foreach ($comments as $_model): ?>
                    <div class="timeline-card">
                        <div class="timeline-info">
                            <h3 class="timeline-title">
                            <?= Html::a("{$_model->username}  {$_model->comment_time}", ["/comment/view", 'comment_id' => $_model->comment_id], ['class' => ['text-decoration-none text-secondary']]); ?>
                                
                            </h3>
                            <?= $_model->discuss ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>
