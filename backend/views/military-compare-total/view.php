<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\MilitaryCompareTotal $model */

$this->title = $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Military Compare Totals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="military-compare-total-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'type' => $model->type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'type' => $model->type], [
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
            'type',
            'active_military_personnel',
            'aircraft',
            'armored_vehicles',
            'naval_fleet',
            'nuclear_warheads',
        ],
    ]) ?>

</div>
