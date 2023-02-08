<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\UkraineRoundTrip $model */

$this->title = 'Create Ukraine Round Trip';
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Round Trips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-round-trip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
