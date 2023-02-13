<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the view of a record in table 'russia_loss'.
*/

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\RussiaLoss $model */

$this->title = $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Russia Losses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="russia-loss-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'date' => $model->date], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'date' => $model->date], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'date',
            'tank',
            'bbm',
            'artillery',
            'multi_barrel_rocket_launcher',
            'air_defense_system',
            'fixed_wing_aircraft',
            'helicopter',
            'uav',
            'cruise_missile',
            'ships',
            'automobile_and_oil_tanker',
            'special_equipment',
            'personnel_total',
            'personnel_increase',
        ],
    ]) ?>

</div>
