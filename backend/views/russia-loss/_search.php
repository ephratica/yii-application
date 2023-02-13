<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the search view of table 'russia_loss'.
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\RussiaLossSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="russia-loss-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'tank') ?>

    <?= $form->field($model, 'bbm') ?>

    <?= $form->field($model, 'artillery') ?>

    <?= $form->field($model, 'multi_barrel_rocket_launcher') ?>

    <?php // echo $form->field($model, 'air_defense_system') ?>

    <?php // echo $form->field($model, 'fixed_wing_aircraft') ?>

    <?php // echo $form->field($model, 'helicopter') ?>

    <?php // echo $form->field($model, 'uav') ?>

    <?php // echo $form->field($model, 'cruise_missile') ?>

    <?php // echo $form->field($model, 'ships') ?>

    <?php // echo $form->field($model, 'automobile_and_oil_tanker') ?>

    <?php // echo $form->field($model, 'special_equipment') ?>

    <?php // echo $form->field($model, 'personnel_total') ?>

    <?php // echo $form->field($model, 'personnel_increase') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
