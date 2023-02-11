<?php

use frontend\models\UkraineRussiaMilitaryExpenditure;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRussiaMilitaryExpenditureSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '俄乌双方军事投入';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-russia-military-expenditure-index">

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
                'text' => 'ukraine-russia-military-expenditure',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['Ukraine', 'Russia']
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
                'name' => 'year',
                'type' => 'category',
                'boundaryGap' => false,
                'data' => $year
            ],
            'yAxis' => [
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'Ukraine',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $ukraine,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ],
                [
                    'name' => 'Russia',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $russia,
                    'emphasis' => [
                        'focus' => 'series'
                    ]
                ]
            ]
        ]
    ]
]); ?>
</div>
