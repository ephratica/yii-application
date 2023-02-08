<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\AllCountries $model */

$this->title = 'Update All Countries: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'All Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'country' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="all-countries-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
