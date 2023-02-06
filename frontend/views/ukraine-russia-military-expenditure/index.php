<?php

use frontend\models\UkraineRussiaMilitaryExpenditure;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRussiaMilitaryExpenditureSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ukraine Russia Military Expenditures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-russia-military-expenditure-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ukraine Russia Military Expenditure', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Year',
            'Ukraine',
            'Russia',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UkraineRussiaMilitaryExpenditure $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Year' => $model->Year]);
                 }
            ],
        ],
    ]); ?>


</div>
