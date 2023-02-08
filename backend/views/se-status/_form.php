<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\SeStatus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="se-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'NATURAL_GAS')->textInput() ?>

    <?= $form->field($model, 'GOLD')->textInput() ?>

    <?= $form->field($model, 'WTI_CRUDE')->textInput() ?>

    <?= $form->field($model, 'BRENT_CRUDE')->textInput() ?>

    <?= $form->field($model, 'SOYBEANS')->textInput() ?>

    <?= $form->field($model, 'CORN')->textInput() ?>

    <?= $form->field($model, 'COPPER')->textInput() ?>

    <?= $form->field($model, 'SILVER')->textInput() ?>

    <?= $form->field($model, 'LOW_SULPHUR_GAS_OIL')->textInput() ?>

    <?= $form->field($model, 'LIVE_CATTLE')->textInput() ?>

    <?= $form->field($model, 'SOYBEAN_OIL')->textInput() ?>

    <?= $form->field($model, 'ALUMINIUM')->textInput() ?>

    <?= $form->field($model, 'SOYBEAN_MEAL')->textInput() ?>

    <?= $form->field($model, 'ZINC')->textInput() ?>

    <?= $form->field($model, 'ULS_DIESEL')->textInput() ?>

    <?= $form->field($model, 'NICKEL')->textInput() ?>

    <?= $form->field($model, 'WHEAT')->textInput() ?>

    <?= $form->field($model, 'SUGAR')->textInput() ?>

    <?= $form->field($model, 'GASOLINE')->textInput() ?>

    <?= $form->field($model, 'COFFEE')->textInput() ?>

    <?= $form->field($model, 'LEAN_HOGS')->textInput() ?>

    <?= $form->field($model, 'HRW_WHEAT')->textInput() ?>

    <?= $form->field($model, 'COTTON')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
