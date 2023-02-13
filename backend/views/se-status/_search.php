<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the search view of table 'se_status'.
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\SeStatusSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="se-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'natural_gas') ?>

    <?= $form->field($model, 'gold') ?>

    <?= $form->field($model, 'wti_crude') ?>

    <?= $form->field($model, 'brent_crude') ?>

    <?php // echo $form->field($model, 'soybeans') ?>

    <?php // echo $form->field($model, 'corn') ?>

    <?php // echo $form->field($model, 'copper') ?>

    <?php // echo $form->field($model, 'silver') ?>

    <?php // echo $form->field($model, 'low_sulphur_gas_oil') ?>

    <?php // echo $form->field($model, 'live_cattle') ?>

    <?php // echo $form->field($model, 'soybean_oil') ?>

    <?php // echo $form->field($model, 'aluminium') ?>

    <?php // echo $form->field($model, 'soybean_meal') ?>

    <?php // echo $form->field($model, 'zinc') ?>

    <?php // echo $form->field($model, 'uls_diesel') ?>

    <?php // echo $form->field($model, 'nickel') ?>

    <?php // echo $form->field($model, 'wheat') ?>

    <?php // echo $form->field($model, 'sugar') ?>

    <?php // echo $form->field($model, 'gasoline') ?>

    <?php // echo $form->field($model, 'coffee') ?>

    <?php // echo $form->field($model, 'lean_hogs') ?>

    <?php // echo $form->field($model, 'hrw_wheat') ?>

    <?php // echo $form->field($model, 'cotton') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
