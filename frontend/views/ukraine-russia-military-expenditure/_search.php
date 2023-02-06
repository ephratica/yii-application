<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRussiaMilitaryExpenditureSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ukraine-russia-military-expenditure-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Year') ?>

    <?= $form->field($model, 'Ukraine') ?>

    <?= $form->field($model, 'Russia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
