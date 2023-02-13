<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the view showing crop price fluctuation in table 'se_status'.
*/

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

$this->title = '作物价格波动';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-status-crop">

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
                'text' => 'Crop price fluctuation',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['Soybeans', 'Corn', 'Wheat', 'Hrw Wheat', 'Cotton']
            ],
            'grid' => [
                'left' => '0.6%',
                'right' => '4%',
                'bottom' => '5%',
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
                'scale' => true,
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'Cotton',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $cotton,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Corn',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $corn,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Wheat',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $wheat,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Hrw Wheat',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $hrw_wheat,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Soybeans',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $soybeans,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ]
            ]
        ]
    ]
]); ?>

</div>
