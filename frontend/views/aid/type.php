<?php

use frontend\models\Aid;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\AidSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '各国对乌克兰的援助（类型）';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aid-type">

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
                    'name' => 'sum',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $value
                ]
            ]
        ]
    ]
]); ?>
</div>

<div class="aid-type-bar">
    <?= ECharts::widget([
    'responsive' => true,
    'options' => [
        'style' => 'height: 1300px;'
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
                'text' => 'National assistance to Ukraine'
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'tooltip' => [
                'trigger' => 'axis',
                'axisPointer' => [
                    'type' => 'shadow'
                ],
            ],
            'yAxis' => [
                'type' => 'category',
                'data' => $type
                //'axisLabel' => ['interval' => 0]      
            ],
            'xAxis' => [
                'scale' => true,
                'type' => 'value',
                'boundaryGap' => [0,0.01]
            ],
            'series' => [
                [
                    //'data' => ['{$searchModel[0]}','{$searchModel[1]}','{$searchModel[2]}','{$searchModel[3]}'],
                    'data' => $value,
                    'type' => 'bar',
                    //'barGap' => '50%'
                ]
            ]
        ]
    ]
]); ?>
</div>

//Radar
//有问题/但不知道哪有
<div class="aid-type-radar">
    <?= ECharts::widget([
    'responsive' => true,
    'options' => [
        'style' => 'height: 1300px;'
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
                'text' => 'National assistance to Ukraine(Type/Value)'
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['Total']
            ],
            'radar' => [
                //'shape' => 'circle',
                //'splitNumber' => 3,
                'indicator' => [
                    [
                        //['text' => 'Financial','max' => 60000000000],
                        ['name' => 'Financial','max' => 100],
                        ['name' => 'Humanitarian','max' => 100],
                        ['name' => 'Military','max' => 100]
                ],
                ],
            ],
            //'tooltip' => [
                //'trigger' => 'axis',
            //],
            'series' => [
                [
                    'name' => 'T',
                    'type' => 'radar',
                    'tooltip' => [
                        'trigger' => 'item'
                    ],
                    //'areaStyle' => [

                    //],
                    'data' => [
                        //'value' => $value,
                        'value' => [95,90,85],
                        'name' => 'Total'
                    ]
                ]
            ]
        ]
    ]
]); ?>
</div>
