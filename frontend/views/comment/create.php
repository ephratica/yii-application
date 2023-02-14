<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Comment $model */

$this->title = '请留下您的宝贵意见！' . Yii::$app->user->identity->username . '！';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'application/x-www-form-urlencoded']]) ?>

    <?= $form->field($model, 'discuss')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Post', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
