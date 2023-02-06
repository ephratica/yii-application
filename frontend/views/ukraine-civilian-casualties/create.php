<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UkraineCivilianCasualties $model */

$this->title = 'Create Ukraine Civilian Casualties';
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Civilian Casualties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ukraine-civilian-casualties-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
