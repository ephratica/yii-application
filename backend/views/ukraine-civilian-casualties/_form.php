<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\UkraineCivilianCasualties $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukraine-civilian-casualties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Killed_Injured')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'Children')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
