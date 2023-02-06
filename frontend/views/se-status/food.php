<?php

use frontend\models\SeStatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\SeStatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '食物价格波动';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-status-food">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= ECharts::widget([
    'responsive' => true,
    'options' => [
        'style' => 'height: 400px;'
    ],
    'pluginEvents' => [
        'click' => [
            new JsExpression('function (params) {console.log(params)}'),
            new JsExpression('function (params) {console.log("ok")}')
        ],
        'legendselectchanged' => new JsExpression('function (params) {console.log(params.selected)}')
    ],
    'pluginOptions' => [
        'option' => [
            'title' => [
                'text' => 'Fluctuation of Grain Price',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['Live Cattle', 'Soybean Meal','Sugar', 'Coffee', 'Lean Hogs']
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'toolbox' => [
                'feature' => [
                    'saveAsImage' => []
                ]
            ],
            'xAxis' => [
                'name' => 'DATE',
                'type' => 'category',
                'boundaryGap' => false,
                'data' => $date
            ],
            'yAxis' => [
                'scale' => true,
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'Live Cattle',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $live_cattle
                ],
                [
                    'name' => 'Soybean Meal',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $soybean_meal
                ],
                [
                    'name' => 'Sugar',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $sugar
                ],
                [
                    'name' => 'Coffee',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $coffee
                ],
                [
                    'name' => 'Lean Hogs',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $lean_hogs
                ]
            ]
        ]
    ]
]); ?>
</div>