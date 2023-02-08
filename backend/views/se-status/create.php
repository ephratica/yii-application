<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\SeStatus $model */

$this->title = 'Create Se Status';
$this->params['breadcrumbs'][] = ['label' => 'Se Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
