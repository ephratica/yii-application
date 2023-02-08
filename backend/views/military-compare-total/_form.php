<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="military-compare-total-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Active_military_personnel')->textInput() ?>

    <?= $form->field($model, 'Aircraft')->textInput() ?>

    <?= $form->field($model, 'Armored_vehicles')->textInput() ?>

    <?= $form->field($model, 'Naval_fleet')->textInput() ?>

    <?= $form->field($model, 'Nuclear_warheads')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
