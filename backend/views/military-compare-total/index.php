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

            'Type',
            'Active_military_personnel',
            'Aircraft',
            'Armored_vehicles',
            'Naval_fleet',
            //'Nuclear_warheads',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MilitaryCompareTotal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Type' => $model->Type]);
                 }
            ],
        ],
    ]); ?>


</div>
