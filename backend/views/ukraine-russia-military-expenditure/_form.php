<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\UkraineRussiaMilitaryExpenditure $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukraine-russia-military-expenditure-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'ukraine')->textInput() ?>

    <?= $form->field($model, 'russia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
