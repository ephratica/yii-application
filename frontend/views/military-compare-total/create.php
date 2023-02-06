<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MilitaryCompareTotal $model */

$this->title = 'Create Military Compare Total';
$this->params['breadcrumbs'][] = ['label' => 'Military Compare Totals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="military-compare-total-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
