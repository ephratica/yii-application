<?php

use frontend\models\RUMilitaryComparison;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RUMilitaryComparisonSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ru Military Comparisons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumilitary-comparison-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ru Military Comparison', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Indicator',
            'Russia',
            'Ukraine',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RUMilitaryComparison $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Indicator' => $model->Indicator]);
                 }
            ],
        ],
    ]); ?>


</div>
