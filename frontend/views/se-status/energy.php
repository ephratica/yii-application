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

$this->title = '能源价值波动';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="se-status-energy">
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
                    'name' => 'Natural Gas',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $natural_gas
                ],
                [
                    'name' => 'Wti Crude',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $wti_crude
                ],
                [
                    'name' => 'Brent Crude',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $brent_crude
                ],
                [
                    'name' => 'Low Sulphur Gas Oil',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $low_sulphur_gas_oil
                ],
                [
                    'name' => 'Soybean Oil',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $soybean_oil
                ],
                [
                    'name' => 'Uls Diesel',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $uls_diesel
                ],
                [
                    'name' => 'Gasoline',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $gasoline
                ]
            ]
        ]
    ]
]); ?>
</div>
