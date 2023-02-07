<?php

use frontend\models\MilitaryCompareTotal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\MilitaryCompareTotalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '俄乌双方军事力量对比';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="military-compare-total-index">

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
                'text' => 'Energy Price Fluctuation',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['Natural Gas', 'Wti Crude','Brent Crude', 'Low Sulphur Gas Oil', 'Soybean Oil','Uls Diesel','Gasoline']
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
                'name' => 'type',
                'type' => 'category',
                'boundaryGap' => false,
                'data' => $type
            ],
            'yAxis' => [
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'Active military personnel',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $personnel
                ],
                [
                    'name' => 'Aircraft',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $aircraft
                ],
                [
                    'name' => 'Armored vehicles',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $vehicles
                ],
                [
                    'name' => 'Naval fleet',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $fleet
                ],
                [
                    'name' => 'Nuclear warheads',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $nuclear
                ]
            ]
        ]
    ]
]); ?>


</div>
