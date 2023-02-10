<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="military-compare-total-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'active_military_personnel') ?>

    <?= $form->field($model, 'aircraft') ?>

    <?= $form->field($model, 'armored_vehicles') ?>

    <?= $form->field($model, 'naval_fleet') ?>

    <?php // echo $form->field($model, 'nuclear_warheads') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
