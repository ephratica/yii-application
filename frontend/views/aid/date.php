<?php

use frontend\models\Aid;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AidSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Aids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aid-date">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country',
            'date',
            'type',
            'value',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Aid $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
