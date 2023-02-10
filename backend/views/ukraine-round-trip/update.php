<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\UkraineRoundTrip $model */

$this->title = 'Update Ukraine Round Trip: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Round Trips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'type' => $model->type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ukraine-round-trip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
