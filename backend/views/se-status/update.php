<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\SeStatus $model */

$this->title = 'Update Se Status: ' . $model->Date;
$this->params['breadcrumbs'][] = ['label' => 'Se Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Date, 'url' => ['view', 'Date' => $model->Date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="se-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
