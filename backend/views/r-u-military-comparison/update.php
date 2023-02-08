<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RUMilitaryComparison $model */

$this->title = 'Update Ru Military Comparison: ' . $model->Indicator;
$this->params['breadcrumbs'][] = ['label' => 'Ru Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Indicator, 'url' => ['view', 'Indicator' => $model->Indicator]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rumilitary-comparison-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
