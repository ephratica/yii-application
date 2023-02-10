<?php

use backend\models\MilitaryCompareTotal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Military Compare Totals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="military-compare-total-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Military Compare Total', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type',
            'active_military_personnel',
            'aircraft',
            'armored_vehicles',
            'naval_fleet',
            //'nuclear_warheads',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MilitaryCompareTotal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'type' => $model->type]);
                 }
            ],
        ],
    ]); ?>


</div>
