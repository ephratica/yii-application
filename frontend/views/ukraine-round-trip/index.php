<?php

use frontend\models\UkraineRoundTrip;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRoundTripSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '乌克兰往返情况';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-round-trip-index">

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
                'text' => 'Ukraine round-trip situation',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
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
                'type' => 'category',
                'data' => $type
            ],
            'yAxis' => [
                'type' => 'value',
            ],
            'series' => [
                [
                    'type' => 'bar',
                    'data' => $num
                ]
            ]
        ]
    ]
]); ?>
</div>
