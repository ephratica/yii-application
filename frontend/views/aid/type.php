<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743 , little5 2011911
*  This is the view showing type and sum(value) in table 'aid'.
*/

use frontend\models\Aid;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\AidSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '各国对乌克兰的援助（类型）';
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
            'toolbox' => [
                'feature' => [
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
                    ],
                    //'magicType' => [
                    //    'show' => true,
                    //    'type' => ['line','bar']
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

