<?php

use frontend\models\SeStatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SeStatusSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Se Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-status-metal">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Se Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

</div>
