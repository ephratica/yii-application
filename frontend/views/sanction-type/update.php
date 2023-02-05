<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionType $model */

$this->title = 'Update Sanction Type: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Sanction Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'type' => $model->type]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanction-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
