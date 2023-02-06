<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRussiaMilitaryExpenditure $model */

$this->title = 'Update Ukraine Russia Military Expenditure: ' . $model->Year;
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Russia Military Expenditures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Year, 'url' => ['view', 'Year' => $model->Year]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ukraine-russia-military-expenditure-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
