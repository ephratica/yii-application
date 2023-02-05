<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RussiaLoss $model */

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
