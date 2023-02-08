<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\UkraineRoundTrip $model */

$this->title = $model->Type;
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Round Trips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ukraine-round-trip-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Type' => $model->Type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Type' => $model->Type], [
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
            'Type',
            'Num',
        ],
    ]) ?>

</div>
