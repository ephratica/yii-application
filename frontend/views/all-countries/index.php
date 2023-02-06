<?php

use frontend\models\AllCountries;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AllCountriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'All Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="all-countries-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create All Countries', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'gdp',
            'sanction',
            'aid',
            'total_cost_in_billion_euros',
            //'number_of_refugees',
            //'code',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AllCountries $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'country' => $model->country]);
                 }
            ],
        ],
    ]); ?>


</div>
