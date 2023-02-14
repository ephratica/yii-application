<?php
/**
*  Team: Untitled, NKU
*  Coding by ephratica 2012885 , little5 2011911
*  This is the view for index.
*/

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = '俄乌动态';
?>

<link rel="stylesheet" href="/css/timeline.css">

<div class="site-index">
<div id="carouselExampleCaptions" class="carousel slide m-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/slides/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>俄乌动态新闻网</h2>
        <p>为您提供战争动态最好的网站</p>
        <?= Html::tag('p', Html::a('成为会员 👋', ['/site/signup'],['class' => ['btn btn-light btn-lg']])); ?>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/slides/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>俄乌动态新闻网</h2>
        <p>为您提供战争动态最好的网站</p>
        <?= Html::tag('p', Html::a('成为会员 👋', ['/site/signup'],['class' => ['btn btn-light btn-lg']])); ?>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/slides/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>俄乌动态新闻网</h2>
        <p>为您提供战争动态最好的网站</p>
        <?= Html::tag('p', Html::a('成为会员 👋', ['/site/signup'],['class' => ['btn btn-light btn-lg']])); ?>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/slides/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>俄乌动态新闻网</h2>
        <p>为您提供战争动态最好的网站</p>
        <?= Html::tag('p', Html::a('成为会员 👋', ['/site/signup'],['class' => ['btn btn-light btn-lg']])); ?>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <div class="body-content m-5">
        <div class="row d-flex justify-content-between">
            <div class="col-lg card bg-light border-light p-5 me-4" style="border-radius: 50px;">
                <h2>经济数据</h2>

                <p>掌握战争中的经济数据，包括食物、能源、金属和作物价格波动。</p>

                <!--<p><?= Html::a('查看食物价格波动 &raquo;', ['/se-status/food'],['class' => ['btn btn-outline-secondary']]); ?>-->
                <p><?= Html::a('查看价格波动源数据 &raquo;', ['/se-status/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <!--<p><?= Html::a('查看金属价格波动 &raquo;', ['/se-status/metal'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看作物价格波动 &raquo;', ['/se-status/crop'],['class' => ['btn btn-outline-secondary']]); ?></p>-->
            </div>
            <div class="col-lg card bg-light border-light p-5 ms-4" style="border-radius: 50px;">
                <h2>数据地图</h2>

                <p>在世界地图上查看外交动态，了解制裁、援助、花费数额、难民去向。</p>

                <p><?= Html::a('查看数据地图 &raquo;', ['/site/world'],['class' => ['btn btn-outline-secondary']]); ?></p>
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-5">
            <div class = "col-lg card bg-light border-light p-5 me-4" style="border-radius: 50px;">
                <h2>军事数据</h2>

                <p>掌握战争中的军事数据，包括军事能力、军事投入、损失情况等。</p>

                <!--<p><?= Html::a('查看军事能力的总体对比 &raquo;', ['/militar-compare-total/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看军事能力的详细对比 &raquo;', ['/r-u-military-comparison/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <p><?= Html::a('查看俄罗斯设备损失数据 &raquo;', ['russia-loss/equipment'],['class' => ['btn btn-outline-secondary']]); ?>-->
                <p><?= Html::a('查看俄罗斯损失源数据 &raquo;', ['/russia-loss/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <!--<p><?= Html::a('查看俄乌双方的军事投入 &raquo;', ['/ukraine-russia-military-expenditure/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看乌克兰的往返的情况 &raquo;', ['/ukraine-round-trip/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <p><?= Html::a('查看乌克兰平民伤亡情况 &raquo;', ['/ukraine-civilian-casualties/index'],['class' => ['btn btn-outline-secondary']]); ?></p>-->
            </div>
            <div class = "col-lg card bg-light border-light p-5 ms-4" style="border-radius: 50px;">
                <h2>外交数据</h2>

                <p>掌握战争中的外交数据，包括援助数据与制裁数据。</p>
                
                <!--<h5>各国援助乌克兰数据</h5>-->
                <p><?= Html::a('查看源数据 &raquo;', ['/aid/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <!--<?= Html::a('时间/价值 &raquo;', ['/aid/date'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('类型/价值 &raquo;', ['/aid/type'],['class' => ['btn btn-outline-secondary']]); ?></p>

                <h5>各国制裁俄罗斯数据</h5>-->
                <!--<p><?= Html::a('各国对俄罗斯的制裁 &raquo;', ['/sanction-country/index'],['class' => ['btn btn-outline-secondary']]); ?></p>-->
                <!--<?= Html::a('时间/价值 &raquo;', ['/sanction-date/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('类型/价值 &raquo;', ['/sacntion-type/index'],['class' => ['btn btn-outline-secondary']]); ?></p>-->
            </div>
        </div>

        <div class="row d-flex">
            <div class="mt-5 card bg-light border-light p-5" style="border-radius: 50px;">
                <h2>新闻动态</h2>

                <div class="timeline w-100">
                    <div class="timeline-outer">
                        <?php foreach ($articles as $article): ?>
                        <div class="timeline-card">
                            <div class="timeline-info">
                                <h3 class="timeline-title">
                                <?= Html::a("{$article->date}  {$article->title}", ["/site/article", "id" => $article->articleid], ['class' => ['text-decoration-none text-secondary']]); ?>
                                    
                                </h3>
                                <?= $article->summary ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
