<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionDate $model */

$this->title = 'Update Sanction Date: ' . $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Sanction Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date, 'url' => ['view', 'date' => $model->date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanction-date-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
