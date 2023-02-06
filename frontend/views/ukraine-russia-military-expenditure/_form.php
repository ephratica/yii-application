<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRussiaMilitaryExpenditure $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukraine-russia-military-expenditure-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'Ukraine')->textInput() ?>

    <?= $form->field($model, 'Russia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
