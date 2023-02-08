<?php

use frontend\models\UkraineCivilianCasualties;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineCivilianCasualtiesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '乌克兰平民伤亡情况';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-civilian-casualties-index">

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
                'text' => 'Civilian casualties in Ukraine',
            ],
            'tooltip' => [
                'trigger' => 'axis',
                'axisPointer' => [
                    'type' => 'shadow'
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
            'toolbox' => [
                'feature' => [
                    'saveAsImage' => []
                ]
            ],
            'xAxis' => [
                //'name' => 'type',
                'type' => 'category',
                'data' => $type
            ],
            'yAxis' => [
                'type' => 'value',
                'boundaryGap' => [0,0.01]     
            ],
            'series' => [
                [
                    'name' => 'total',
                    'type' => 'bar',
                    'data' => $total
                ],
                [
                    'name' => 'children',
                    'type' => 'bar',
                    'data' => $children
                ]
            ]
        ]
    ]
]); ?>
</div>
