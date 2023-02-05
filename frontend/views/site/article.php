<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;

$this->title = "$article->title";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-article">
    <div class="mt-2 mb-2 w-100">
        <img class="img-fluid img-responsive w-100" src="<?= $article->img_url ?>" style="height: 300px; object-fit: cover;">
    </div>
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    <p class="text-secondary text-center"><?= Html::encode($article->summary) ?></p>
    <div>
    <?= $article->content ?>
    </div>
</div>
