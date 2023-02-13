<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the main view of table 'se_status'.
*/

use backend\models\SeStatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SeStatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Se Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-status-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Se Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'date',
            'natural_gas',
            'gold',
            'wti_crude',
            'brent_crude',
            //'soybeans',
            //'corn',
            //'copper',
            //'silver',
            //'low_sulphur_gas_oil',
            //'live_cattle',
            //'soybean_oil',
            //'aluminium',
            //'soybean_meal',
            //'zinc',
            //'uls_diesel',
            //'nickel',
            //'wheat',
            //'sugar',
            //'gasoline',
            //'coffee',
            //'lean_hogs',
            //'hrw_wheat',
            //'cotton',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SeStatus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'date' => $model->date]);
                 }
            ],
        ],
    ]); ?>


</div>
