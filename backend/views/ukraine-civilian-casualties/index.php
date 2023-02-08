<?php

use backend\models\UkraineCivilianCasualties;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\UkraineCivilianCasualtiesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ukraine Civilian Casualties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-civilian-casualties-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ukraine Civilian Casualties', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Killed_Injured',
            'Total',
            'Children',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UkraineCivilianCasualties $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Killed_Injured' => $model->Killed_Injured]);
                 }
            ],
        ],
    ]); ?>


</div>
