<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SeStatusSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="se-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'NATURAL_GAS') ?>

    <?= $form->field($model, 'GOLD') ?>

    <?= $form->field($model, 'WTI_CRUDE') ?>

    <?= $form->field($model, 'BRENT_CRUDE') ?>

    <?php // echo $form->field($model, 'SOYBEANS') ?>

    <?php // echo $form->field($model, 'CORN') ?>

    <?php // echo $form->field($model, 'COPPER') ?>

    <?php // echo $form->field($model, 'SILVER') ?>

    <?php // echo $form->field($model, 'LOW_SULPHUR_GAS_OIL') ?>

    <?php // echo $form->field($model, 'LIVE_CATTLE') ?>

    <?php // echo $form->field($model, 'SOYBEAN_OIL') ?>

    <?php // echo $form->field($model, 'ALUMINIUM') ?>

    <?php // echo $form->field($model, 'SOYBEAN_MEAL') ?>

    <?php // echo $form->field($model, 'ZINC') ?>

    <?php // echo $form->field($model, 'ULS_DIESEL') ?>

    <?php // echo $form->field($model, 'NICKEL') ?>

    <?php // echo $form->field($model, 'WHEAT') ?>

    <?php // echo $form->field($model, 'SUGAR') ?>

    <?php // echo $form->field($model, 'GASOLINE') ?>

    <?php // echo $form->field($model, 'COFFEE') ?>

    <?php // echo $form->field($model, 'LEAN_HOGS') ?>

    <?php // echo $form->field($model, 'HRW_WHEAT') ?>

    <?php // echo $form->field($model, 'COTTON') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
