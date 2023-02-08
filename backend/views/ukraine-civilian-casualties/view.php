<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\UkraineCivilianCasualties $model */

$this->title = $model->Killed_Injured;
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Civilian Casualties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ukraine-civilian-casualties-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Killed_Injured' => $model->Killed_Injured], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Killed_Injured' => $model->Killed_Injured], [
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
            'Killed_Injured',
            'Total',
            'Children',
        ],
    ]) ?>

</div>
