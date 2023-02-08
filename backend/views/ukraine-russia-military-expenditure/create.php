<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\UkraineRussiaMilitaryExpenditure $model */

$this->title = 'Create Ukraine Russia Military Expenditure';
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Russia Military Expenditures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-russia-military-expenditure-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
