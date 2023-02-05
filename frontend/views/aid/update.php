<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Aid $model */

$this->title = 'Update Aid: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
