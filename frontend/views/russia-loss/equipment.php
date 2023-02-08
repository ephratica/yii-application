<?php

use frontend\models\RussiaLoss;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\web\JsExpression;
use daixianceng\echarts\ECharts;

/** @var yii\web\View $this */
/** @var frontend\models\RussiaLossSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '俄罗斯军备损失';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="russia-loss-equipment">

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
                'text' => 'Russian armament loss',
                'textStyle' =>[
                    'fontFamily' => 'Center'
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis'
            ],
            'legend' => [
                'data' => ['tank', 'bbm','artillery', 'multi barrel rocket launcher', 'air defense system','fixed wing aircraft','helicopter','uav','cruise missile','ships','automobile and oil tanker','special equipment']
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
                    'name' => 'tank',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $tank
                ],
                [
                    'name' => 'bbm',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $bbm
                ],
                [
                    'name' => 'artillery',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $artillery
                ],
                [
                    'name' => 'multi barrel rocket launcher',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $rocket
                ],
                [
                    'name' => 'air defense system',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $air_defense
                ],
                [
                    'name' => 'fixed wing aircraft',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $fixed_wing_aircraft
                ],
                [
                    'name' => 'helicopter',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $helicopter
                ],
                [
                    'name' => 'uav',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $uav
                ],
                [
                    'name' => 'cruise missile',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $cruise_missile
                ],
                [
                    'name' => 'ships',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $ships
                ],
                [
                    'name' => 'automobile and oil tanker',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $automobile_and_oil_tanker
                ],
                [
                    'name' => 'special equipment',
                    'type' => 'line',
                    'stack' => 'PRICE',
                    'data' => $special
                ],
            ]
        ]
    ]
]); ?>


</div>
