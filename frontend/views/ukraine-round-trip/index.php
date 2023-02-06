<?php

use frontend\models\UkraineRoundTrip;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRoundTripSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ukraine Round Trips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-round-trip-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ukraine Round Trip', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Type',
            'Num',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UkraineRoundTrip $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Type' => $model->Type]);
                 }
            ],
        ],
    ]); ?>


</div>
