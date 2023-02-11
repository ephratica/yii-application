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
                'text' => 'Overall comparison of military strength',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'toolbox' => [
                'feature' => [
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
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
                'boundaryGap' => [0,0.01]
            ],
            'yAxis' => [
                'type' => 'category',
                'data' => ['NATO','Russia','Ukraine']
            ],
            'series' => [
                [
                    'name' => 'Active military personnel',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $personnel,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Aircraft',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $aircraft,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Armored vehicles',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $vehicles,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Naval fleet',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $fleet,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Nuclear warheads',
                    'type' => 'bar',
                    'stack' => 'PRICE',
                    'data' => $nuclear,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
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
            'toolbox' => [
                'feature' => [
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
                    ],
                    //'magicType' => [
                    //    'show' => true,
                    //    'type' => ['line','bar','stack','tied','pie']
                    //],
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
            'legend' => [
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'yAxis' => [
                //'name' => 'type',
                'type' => 'value',
                //'boundaryGap' => false,
                //'data' => $type
                'boundaryGap' => [0,0.01]
            ],
            'xAxis' => [
                'type' => 'category',
                'data' => ['NATO','Russia','Ukraine']
            ],
            'series' => [
                [
                    'name' => 'Active military personnel',
                    'type' => 'bar',
                    'data' => $personnel,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Aircraft',
                    'type' => 'bar',
                    'data' => $aircraft,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Armored vehicles',
                    'type' => 'bar',
                    'data' => $vehicles,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Naval fleet',
                    'type' => 'bar',
                    'data' => $fleet,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Nuclear warheads',
                    'type' => 'bar',
                    'data' => $nuclear,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ]
            ]
        ]
    ]
]); ?>
</div>