<?php

use frontend\models\RUMilitaryComparison;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\RUMilitaryComparisonSearch $searchModel */
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
                'text' => 'Comparison of military strength(DETAILS)',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'xAxis' => [
                'name' => 'indicator',
                'type' => 'category',
                //'boundaryGap' => false,
                //'data' => $type
                'data' => $indicator,
                'boundaryGap' => [0,0.01]
            ],
            'yAxis' => [
                'type' => 'value',
                'data' => ['Russia','Ukraine']
            ],
            'series' => [
                [
                    'name' => 'Russia',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $russia
                ],
                [
                    'name' => 'Ukraine',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $ukraine
                ]
            ]
        ]
    ]
]); ?>
</div>

<div class="military-compare-total-index-bar">


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
                'text' => 'Overall comparison of military strength',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'xAxis' => [
                //'name' => 'type',
                'type' => 'value',
                //'boundaryGap' => false,
                //'data' => $type
                'data' => $indicator,
                'boundaryGap' => [0,0.01]
            ],
            'yAxis' => [
                'type' => 'category',
                'data' => $indicator
            ],
            'series' => [
                [
                    'name' => 'Russia',
                    'type' => 'bar',
                    'data' => $russia
                ],
                [
                    'name' => 'Ukraine',
                    'type' => 'bar',
                    'data' => $ukraine
                ]
            ]
        ]
    ]
]); ?>
</div>