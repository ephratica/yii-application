<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionCountry $model */

$this->title = 'Update Sanction Country: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Sanction Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'country' => $model->country]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanction-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
