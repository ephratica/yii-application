<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotal $model */

$this->title = 'Update Military Compare Total: ' . $model->Type;
$this->params['breadcrumbs'][] = ['label' => 'Military Compare Totals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Type, 'url' => ['view', 'Type' => $model->Type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="military-compare-total-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
