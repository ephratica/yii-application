<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SeStatus $model */

$this->title = $model->Date;
$this->params['breadcrumbs'][] = ['label' => 'Se Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Date' => $model->Date], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Date' => $model->Date], [
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
            'Date',
            'NATURAL_GAS',
            'GOLD',
            'WTI_CRUDE',
            'BRENT_CRUDE',
            'SOYBEANS',
            'CORN',
            'COPPER',
            'SILVER',
            'LOW_SULPHUR_GAS_OIL',
            'LIVE_CATTLE',
            'SOYBEAN_OIL',
            'ALUMINIUM',
            'SOYBEAN_MEAL',
            'ZINC',
            'ULS_DIESEL',
            'NICKEL',
            'WHEAT',
            'SUGAR',
            'GASOLINE',
            'COFFEE',
            'LEAN_HOGS',
            'HRW_WHEAT',
            'COTTON',
        ],
    ]) ?>

</div>
