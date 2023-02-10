<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\SeStatus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="se-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'natural_gas')->textInput() ?>

    <?= $form->field($model, 'gold')->textInput() ?>

    <?= $form->field($model, 'wti_crude')->textInput() ?>

    <?= $form->field($model, 'brent_crude')->textInput() ?>

    <?= $form->field($model, 'soybeans')->textInput() ?>

    <?= $form->field($model, 'corn')->textInput() ?>

    <?= $form->field($model, 'copper')->textInput() ?>

    <?= $form->field($model, 'silver')->textInput() ?>

    <?= $form->field($model, 'low_sulphur_gas_oil')->textInput() ?>

    <?= $form->field($model, 'live_cattle')->textInput() ?>

    <?= $form->field($model, 'soybean_oil')->textInput() ?>

    <?= $form->field($model, 'aluminium')->textInput() ?>

    <?= $form->field($model, 'soybean_meal')->textInput() ?>

    <?= $form->field($model, 'zinc')->textInput() ?>

    <?= $form->field($model, 'uls_diesel')->textInput() ?>

    <?= $form->field($model, 'nickel')->textInput() ?>

    <?= $form->field($model, 'wheat')->textInput() ?>

    <?= $form->field($model, 'sugar')->textInput() ?>

    <?= $form->field($model, 'gasoline')->textInput() ?>

    <?= $form->field($model, 'coffee')->textInput() ?>

    <?= $form->field($model, 'lean_hogs')->textInput() ?>

    <?= $form->field($model, 'hrw_wheat')->textInput() ?>

    <?= $form->field($model, 'cotton')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
