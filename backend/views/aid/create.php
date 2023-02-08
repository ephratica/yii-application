<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Aid $model */

$this->title = 'Create Aid';
$this->params['breadcrumbs'][] = ['label' => 'Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
