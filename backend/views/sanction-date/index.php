<?php

use backend\models\SanctionDate;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SanctionDateSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sanction Dates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-date-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sanction Date', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date',
            'value',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SanctionDate $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'date' => $model->date]);
                 }
            ],
        ],
    ]); ?>


</div>
