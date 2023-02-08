<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\AllCountries $model */

$this->title = 'Create All Countries';
$this->params['breadcrumbs'][] = ['label' => 'All Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="all-countries-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
