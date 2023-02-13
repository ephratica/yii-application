<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Comment $model */

$this->title = '请留下您的宝贵意见！我们将虚心接受！';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
