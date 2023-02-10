<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="military-compare-total-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active_military_personnel')->textInput() ?>

    <?= $form->field($model, 'aircraft')->textInput() ?>

    <?= $form->field($model, 'armored_vehicles')->textInput() ?>

    <?= $form->field($model, 'naval_fleet')->textInput() ?>

    <?= $form->field($model, 'nuclear_warheads')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
