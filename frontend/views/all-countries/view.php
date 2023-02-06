<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AllCountries $model */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'All Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="all-countries-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'country' => $model->country], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'country' => $model->country], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'country',
            'gdp',
            'sanction',
            'aid',
            'total_cost_in_billion_euros',
            'number_of_refugees',
            'code',
        ],
    ]) ?>

</div>
