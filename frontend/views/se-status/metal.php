<?php

use frontend\models\SeStatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

use function UI\Draw\Text\Font\fontFamilies;
/** @var yii\web\View $this */
/** @var frontend\models\SeStatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '金属价值波动';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="se-status-metal">
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
                'text' => 'Metal prices fluctuate',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['COPPER', 'SILVER','GOLD',  'ALUMINIUM', 'ZINC','NICKEL']
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
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'COPPER',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $copper
                ],
                [
                    'name' => 'SILVER',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $silver
                ],
                [
                    'name' => 'GOLD',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $gold
                ],
                [
                    'name' => 'ALUMINIUM',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $aluminium
                ],
                [
                    'name' => 'ZINC',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $zinc
                ],
                [
                    'name' => 'NICKEL',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $nickel
                ]
            ]
        ]
    ]
]); ?>
</div>

<div class="se-status-nickel">
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
                'text' => 'NICKEL'
            ],
            //'grid' => [
            //    'height' => 20
            //],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'xAxis' => [
                'type' => 'category',
                'data' => $date
                //'data' => ['Aircraft', 'Entity', 'Individual', 'Vessel']
                //'data' => [$searchModel[0],$searchModel[1],$searchModel[2],$searchModel[3]]
                //'data' => $model -> type
            ],
            'yAxis' => [
                'scale' => true,
                'type' => 'value'
            ],
            'series' => [
                [
                    //'data' => ['{$searchModel[0]}','{$searchModel[1]}','{$searchModel[2]}','{$searchModel[3]}'],
                    'data' => $nickel,
                    'type' => 'bar'
                ]
            ]
        ]
    ]
]); ?>
</div>