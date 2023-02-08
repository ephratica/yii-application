<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="military-compare-total-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Type') ?>

    <?= $form->field($model, 'Active_military_personnel') ?>

    <?= $form->field($model, 'Aircraft') ?>

    <?= $form->field($model, 'Armored_vehicles') ?>

    <?= $form->field($model, 'Naval_fleet') ?>

    <?php // echo $form->field($model, 'Nuclear_warheads') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
