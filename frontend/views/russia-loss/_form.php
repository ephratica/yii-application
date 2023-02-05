<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RussiaLoss $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="russia-loss-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'tank')->textInput() ?>

    <?= $form->field($model, 'bbm')->textInput() ?>

    <?= $form->field($model, 'artillery')->textInput() ?>

    <?= $form->field($model, 'multi_barrel_rocket_launcher')->textInput() ?>

    <?= $form->field($model, 'air_defense_system')->textInput() ?>

    <?= $form->field($model, 'fixed_wing_aircraft')->textInput() ?>

    <?= $form->field($model, 'helicopter')->textInput() ?>

    <?= $form->field($model, 'uav')->textInput() ?>

    <?= $form->field($model, 'cruise_missile')->textInput() ?>

    <?= $form->field($model, 'ships')->textInput() ?>

    <?= $form->field($model, 'automobile_and_oil_tanker')->textInput() ?>

    <?= $form->field($model, 'special_equipment')->textInput() ?>

    <?= $form->field($model, 'personnel_total')->textInput() ?>

    <?= $form->field($model, 'personnel_increase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
