<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SanctionCountry $model */

$this->title = 'Create Sanction Country';
$this->params['breadcrumbs'][] = ['label' => 'Sanction Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanction-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
