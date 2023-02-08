<?php

use backend\models\SanctionType;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SanctionTypeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sanction Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-type-index">

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
