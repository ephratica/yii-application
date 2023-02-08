<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\SanctionDate $model */

$this->title = 'Create Sanction Date';
$this->params['breadcrumbs'][] = ['label' => 'Sanction Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-date-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
