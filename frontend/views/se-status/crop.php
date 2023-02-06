<?php

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
                'scale' => true,
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'Soybeans',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $soybeans
                ],
                [
                    'name' => 'Corn',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $corn
                ],
                [
                    'name' => 'Wheat',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $wheat
                ],
                [
                    'name' => 'Hrw Wheat',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $hrw_wheat
                ],
                [
                    'name' => 'Cotton',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $cotton
                ]
            ]
        ]
    ]
]); ?>

</div>
