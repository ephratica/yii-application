<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RUMilitaryComparison $model */

$this->title = 'Create Ru Military Comparison';
$this->params['breadcrumbs'][] = ['label' => 'Ru Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumilitary-comparison-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
