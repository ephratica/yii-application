<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;

$this->title = '关于我们';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="card bg-light border-light mt-2 mb-3">
      <div class="card-body">
        <h5 class="card-title">俄罗斯乌克兰战争动态新闻网</h5>
        <p class="card-text">本网站建于2023年2月</p>
      </div>
    </div>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
  <div class="card bg-light border-light h-100">
      <div class="card-body">
        <h5 class="card-title">穆禹宸</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
  <div class="card bg-light border-light h-100">
      <div class="card-body">
        <h5 class="card-title">陈静怡</h5>
        <p class="card-text">
          email: ephratica@foxmail.com
          <p>
            <?= Html::a('下载个人作业', ['/site/files'],['class' => ['btn btn-outline-secondary']]); ?>
          </p>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
  <div class="card bg-light border-light h-100">
      <div class="card-body">
        <h5 class="card-title">果丁</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card bg-light border-light h-100">
      <div class="card-body">
        <h5 class="card-title">林巧莹</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

</div>
