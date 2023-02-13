<?php

/**
*  Team: Untitled, NKU
*  Coding by Roslin 2013743
*  This is the view of a record in table 'se_status'.
*/

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\SeStatus $model */

$this->title = $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Se Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-status-view">

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
            'natural_gas',
            'gold',
            'wti_crude',
            'brent_crude',
            'soybeans',
            'corn',
            'copper',
            'silver',
            'low_sulphur_gas_oil',
            'live_cattle',
            'soybean_oil',
            'aluminium',
            'soybean_meal',
            'zinc',
            'uls_diesel',
            'nickel',
            'wheat',
            'sugar',
            'gasoline',
            'coffee',
            'lean_hogs',
            'hrw_wheat',
            'cotton',
        ],
    ]) ?>

</div>
