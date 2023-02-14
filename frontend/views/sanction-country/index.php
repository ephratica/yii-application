<?php

/**
*  Team: Untitled, NKU
*  Coding by
*  This is the view showing personnel loss in table 'russia_loss'.
*/

use frontend\models\SanctionCountry;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionCountrySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '各国对俄罗斯的制裁（国家）';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-country-index">

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
                'text' => 'Sanctions imposed by countries on Russia',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis',
                'axisPointer' => [
                    'type' => 'shadow'
                ]
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
            'yAxis' => [
                'name' => 'country',
                'type' => 'category',
                'boundaryGap' => false,
                'data' => $country
            ],
            'xAxis' => [
                'type' => 'value'
            ],
            'series' => [
                [
                    'name' => 'since 2014',
                    'type' => 'bar',
                    'stack' => 'total',
                    'label' =>[
                        'show' => true
                    ],
                    'emphasis' => [
                        'focus' => 'series'
                    ],
                    'data' => $since_2014
                ],
                [
                    'name' => 'since 2022/02',
                    'type' => 'bar',
                    'stack' => 'total',
                    'label' =>[
                        'show' => true
                    ],
                    'emphasis' => [
                        'focus' => 'series'
                    ],
                    'data' => $since_202202
                ]
            ]
        ]
    ]
]); ?>
</div>
