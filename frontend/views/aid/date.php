<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743 , little5 2011911
*  This is the view showing date and sum(value) in table 'aid'.
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

$this->title = '各国对乌克兰的援助（月份）';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="aid-date-bar">
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
                'text' => 'National assistance to Ukraine(Date/Month)'
            ],
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'tooltip' => [
                'trigger' => 'axis',
            ],
            'toolbox' => [
                'feature' => [
                    'dataView' => [
                        'show' => true,
                        'readOnly' => true
                    ],
                    'magicType' => [
                        'show' => true,
                        'type' => ['line','bar']
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
                'type' => 'category',
                'data' => $date
                //'axisLabel' => ['interval' => 0]      
            ],
            'yAxis' => [
                'scale' => true,
                'type' => 'value',
            ],
            'series' => [
                [
                    'data' => $value,
                    'type' => 'bar',
                    //'barGap' => '50%'
                ]
            ]
        ]
    ]
]); ?>
</div>