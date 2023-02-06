<?php

use frontend\models\SanctionType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sanction Types';
$this->params['breadcrumbs'][] = $this->title;
?>


//按列读入再改
<div class="sanction-type-index">
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
                'text' => '制裁type&value'
            ],
            'xAxis' => [
                'type' => 'category',
                //'data' =>
                'data' => ['Aircraft', 'Entity', 'Individual', 'Vessel']
                //'data' => [$searchModel[0],$searchModel[1],$searchModel[2],$searchModel[3]]
                //'data' => $model -> type
            ],
            'yAxis' => [
                'type' => 'value'
            ],
            'series' => [
                [
                    'data' => ['{$searchModel[0]}','{$searchModel[1]}','{$searchModel[2]}','{$searchModel[3]}'],
                    //'data' => $dataProvider,
                    'type' => 'bar'
                ]
            ]
        ]
    ]
]); ?>
</div>

<div class="sanction-type">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sanction Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type',
            'value',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SanctionType $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'type' => $model->type]);
                 }
            ],
        ],
    ]); ?>


</div>
