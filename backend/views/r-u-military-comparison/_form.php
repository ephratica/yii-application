<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\RUMilitaryComparison $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rumilitary-comparison-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'indicator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'russia')->textInput() ?>

    <?= $form->field($model, 'ukraine')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
