<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\AllCountriesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="all-countries-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'gdp') ?>

    <?= $form->field($model, 'sanction') ?>

    <?= $form->field($model, 'aid') ?>

    <?= $form->field($model, 'total_cost_in_billion_euros') ?>

    <?php // echo $form->field($model, 'number_of_refugees') ?>

    <?php // echo $form->field($model, 'code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
