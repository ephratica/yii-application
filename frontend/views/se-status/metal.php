<?php

use frontend\models\SeStatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SeStatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Se Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-status-metal">

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

            'Date',
            'NATURAL_GAS',
            'GOLD',
            'WTI_CRUDE',
            'BRENT_CRUDE',
            //'SOYBEANS',
            //'CORN',
            //'COPPER',
            //'SILVER',
            //'LOW_SULPHUR_GAS_OIL',
            //'LIVE_CATTLE',
            //'SOYBEAN_OIL',
            //'ALUMINIUM',
            //'SOYBEAN_MEAL',
            //'ZINC',
            //'ULS_DIESEL',
            //'NICKEL',
            //'WHEAT',
            //'SUGAR',
            //'GASOLINE',
            //'COFFEE',
            //'LEAN_HOGS',
            //'HRW_WHEAT',
            //'COTTON',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SeStatus $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Date' => $model->Date]);
                 }
            ],
        ],
    ]); ?>


</div>
