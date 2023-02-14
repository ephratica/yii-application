<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743 , little5 2011911
*  This is the view showing metal price fluctuation in table 'se_status'.
*/

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
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
                    ],
                    'magicType' => [
                        'show' => true,
                        'type' => ['line','bar','stack']
                    ],
                    'restore' => [
                        'show' => true
                    ],
                    'saveAsImage' => [
                        'show' => true
                    ],
                    'dataZoom' => [
                        'show' => true
                    ]
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
                    'data' => $copper,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'SILVER',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $silver,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'GOLD',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $gold,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'ALUMINIUM',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $aluminium,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'ZINC',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $zinc,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'NICKEL',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $nickel,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
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
                'text' => 'NICKEL prices fluctuate'
            ],
            //'grid' => [
            //    'height' => 20
            //],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'toolbox' => [
                'feature' => [
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
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
                    ],
                    'dataZoom' => [
                        'show' => true
                    ]
                ]
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