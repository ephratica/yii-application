<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the create view of a record in table 'russia_loss'.
*/

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\RussiaLoss $model */

$this->title = 'Create Russia Loss';
$this->params['breadcrumbs'][] = ['label' => 'Russia Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="russia-loss-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
