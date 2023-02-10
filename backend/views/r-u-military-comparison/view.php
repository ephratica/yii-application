<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\RUMilitaryComparison $model */

$this->title = $model->indicator;
$this->params['breadcrumbs'][] = ['label' => 'Ru Military Comparisons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rumilitary-comparison-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'indicator' => $model->indicator], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'indicator' => $model->indicator], [
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
            'indicator',
            'russia',
            'ukraine',
        ],
    ]) ?>

</div>
