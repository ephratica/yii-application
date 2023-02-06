<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionCountry $model */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Sanction Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sanction-country-view">

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
            'since_2014',
            'since_202202',
        ],
    ]) ?>

</div>
