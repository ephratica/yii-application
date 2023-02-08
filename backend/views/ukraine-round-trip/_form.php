<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\UkraineRoundTrip $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukraine-round-trip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Num')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
