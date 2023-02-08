<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Aid $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aid-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
