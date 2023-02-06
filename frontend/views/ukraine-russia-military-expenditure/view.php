<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineRussiaMilitaryExpenditure $model */

$this->title = $model->Year;
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Russia Military Expenditures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ukraine-russia-military-expenditure-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Year' => $model->Year], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Year' => $model->Year], [
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
            'Year',
            'Ukraine',
            'Russia',
        ],
    ]) ?>

</div>
