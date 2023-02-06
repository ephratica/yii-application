<?php

use frontend\models\SanctionCountry;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionCountrySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sanction Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sanction Country', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'since_2014',
            'since_202202',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SanctionCountry $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'country' => $model->country]);
                 }
            ],
        ],
    ]); ?>


</div>
