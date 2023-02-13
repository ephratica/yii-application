<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the main view of table 'russia_loss'.
*/

use backend\models\RussiaLoss;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\RussiaLossSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Russia Losses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="russia-loss-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Russia Loss', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date',
            'tank',
            'bbm',
            'artillery',
            'multi_barrel_rocket_launcher',
            //'air_defense_system',
            //'fixed_wing_aircraft',
            //'helicopter',
            //'uav',
            //'cruise_missile',
            //'ships',
            //'automobile_and_oil_tanker',
            //'special_equipment',
            //'personnel_total',
            //'personnel_increase',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RussiaLoss $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'date' => $model->date]);
                 }
            ],
        ],
    ]); ?>


</div>
