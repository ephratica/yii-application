<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\SanctionType $model */

$this->title = 'Create Sanction Type';
$this->params['breadcrumbs'][] = ['label' => 'Sanction Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
