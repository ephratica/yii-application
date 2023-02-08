<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\UkraineCivilianCasualties $model */

$this->title = 'Update Ukraine Civilian Casualties: ' . $model->Killed_Injured;
$this->params['breadcrumbs'][] = ['label' => 'Ukraine Civilian Casualties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Killed_Injured, 'url' => ['view', 'Killed_Injured' => $model->Killed_Injured]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ukraine-civilian-casualties-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
