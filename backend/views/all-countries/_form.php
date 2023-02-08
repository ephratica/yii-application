<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\AllCountries $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="all-countries-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gdp')->textInput() ?>

    <?= $form->field($model, 'sanction')->textInput() ?>

    <?= $form->field($model, 'aid')->textInput() ?>

    <?= $form->field($model, 'total_cost_in_billion_euros')->textInput() ?>

    <?= $form->field($model, 'number_of_refugees')->textInput() ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
