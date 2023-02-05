<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RussiaLoss $model */

$this->title = 'Update Russia Loss: ' . $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Russia Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date, 'url' => ['view', 'date' => $model->date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="russia-loss-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
