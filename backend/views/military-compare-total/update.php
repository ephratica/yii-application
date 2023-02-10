<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotal $model */

$this->title = 'Update Military Compare Total: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Military Compare Totals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'type' => $model->type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="military-compare-total-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
