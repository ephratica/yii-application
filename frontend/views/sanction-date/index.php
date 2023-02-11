<?php

use frontend\models\SanctionDate;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionDateSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '各国对俄罗斯的制裁（时间）';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-date-index">

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
                'text' => 'Sanctions against Russia(Date)',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
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
            'grid' => [
                'left' => '3%',
                'right' => '4%',
                'bottom' => '3%',
                'containLabel' => true
            ],
            'xAxis' => [
                'name' => 'date',
                'type' => 'category',
                'boundaryGap' => false,
                'data' => $date
            ],
            'yAxis' => [
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'value',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $value
                ]
            ]
        ]
    ]
]); ?>
</div>