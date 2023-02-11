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

$this->title = '俄罗斯军备损失';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="russia-loss-equipment">

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
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['tank', 'bbm','artillery', 'multi barrel rocket launcher', 'air defense system','fixed wing aircraft','helicopter','uav','cruise missile','ships','automobile and oil tanker','special equipment']
            ],
            'grid' => [
                'left' => '0.5%',
                'right' => '4%',
                'bottom' => '5%',
                //'top' => '0',
                'containLabel' => false
            ],
            'toolbox' => [
                'feature' => [
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
                    ],
                    'magicType' => [
                        'show' => true,
                        'type' => ['line','bar','stack','tied','pie']
                    ],
                    'restore' => [
                        'show' => true
                    ],
                    'saveAsImage' => [
                        'show' => true
                    ],
                    'dataZoom' => [
                        'show' => true
                    ],
                    ],
                    'top' => '5%'
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
                    'name' => 'ships',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $ships,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'special equipment',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $special,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'air defense system',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $air_defense,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'helicopter',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $helicopter,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'fixed wing aircraft',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $fixed_wing_aircraft,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'multi barrel rocket launcher',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $rocket,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'cruise missile',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $cruise_missile,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'uav',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $uav,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'artillery',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $artillery,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'tank',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $tank,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'automobile and oil tanker',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $automobile_and_oil_tanker,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'bbm',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $bbm,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ]
            ]
        ]
    ]
]); ?>
</div>
