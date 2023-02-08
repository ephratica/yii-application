<?php

use frontend\models\SanctionType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '各国对俄罗斯的制裁（类型）';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="aid-type-bar">
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
                'text' => 'National assistance to Ukraine'
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'tooltip' => [
                'trigger' => 'axis',
                'axisPointer' => [
                    'type' => 'shadow'
                ],
            ],
            'yAxis' => [
                'type' => 'category',
                'data' => $type
                //'axisLabel' => ['interval' => 0]      
            ],
            'xAxis' => [
                'scale' => true,
                'type' => 'value',
                'boundaryGap' => [0,0.01]
            ],
            'series' => [
                [
                    //'data' => ['{$searchModel[0]}','{$searchModel[1]}','{$searchModel[2]}','{$searchModel[3]}'],
                    'data' => $value,
                    'type' => 'bar',
                    //'barGap' => '50%'
                ]
            ]
        ]
    ]
]); ?>
</div>