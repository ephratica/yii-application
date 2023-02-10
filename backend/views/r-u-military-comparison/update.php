<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RUMilitaryComparison $model */

$this->title = 'Update Ru Military Comparison: ' . $model->indicator;
$this->params['breadcrumbs'][] = ['label' => 'Ru Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->indicator, 'url' => ['view', 'indicator' => $model->indicator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rumilitary-comparison-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
