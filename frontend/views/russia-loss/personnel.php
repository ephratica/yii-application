<?php

use frontend\models\RussiaLoss;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\RussiaLossSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '俄罗斯人员损失';
$this->params['breadcrumbs'][] = $this->title;
?>
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
            'text' => 'Russian personnel loss',
            'textStyle' =>[
                'fontFamily' => 'Center'
            ],
        ],
        'tooltip' => [
            'trigger' => 'axis',
            'axisPoniter' => [
                'type' => 'cross',
                'crossStyle' => [
                    'color' => '#999'
                ]
            ]
        ],
        'toolbox' => [
            'feature' => [
                'dataView' => [
                    'show' => true,
                    'readOnly' => false
                ],
                'magicType' => [
                    'show' => true,
                    'type' => ['line','bar']
                ],
                'restore' => [
                    'show' => true
                ],
                'saveAsImage' => [
                    'show' => true
                ]
            ]
        ],
        'legend' => [
            'data' => ['personnel total','personnel increase']
        ],
        'xAxis' => [
            'type' => 'category',
            'data' => $date,
            'axisPointer' => [
                'type' => 'shadow'
            ]
        ],
        'yAxis' => [
            [
                'type' => 'value',
                'name' => 'personnel increase',
                'min' => 106300,
                'max' => 124000,
                'interval' => 3540,
                'axisLabel' => [
                    'formatter' => '{value}person-time'
                ]
            ],
            [
                'type' => 'value',
                'name' => 'personnel total',
                'min' => 950,
                'max' => 400,
                'interval' => 110,
                'axisLabel' => [
                    'formatter' => '{value}person-time'
                ]
            ]
        ],
        'series' => [
            [
                'name' => 'personnel total',
                'type' => 'bar',
                'data' => $total
            ],
            [
                'name' => 'personnel increase',
                'type' => 'line',
                'yAxisIndex' => 1,
                'data' => $increase
            ]
        ]
    ]
]
]); ?>
</div>
