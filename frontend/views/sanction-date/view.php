<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionDate $model */

$this->title = $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Sanction Dates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sanction-date-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'date' => $model->date], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'date' => $model->date], [
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
            'date',
            'value',
        ],
    ]) ?>

</div>
