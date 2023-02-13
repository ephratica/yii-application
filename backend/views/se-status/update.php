<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the update view of table 'se_status'.
*/

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\SeStatus $model */

$this->title = 'Update Se Status: ' . $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Se Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date, 'url' => ['view', 'date' => $model->date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="se-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
