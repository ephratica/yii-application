<?php
/**
*  Team: Untitled, NKU
*  Coding by ephratica 2012885
*  This is the view for index.
*/

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = '俄乌动态';
?>

<link rel="stylesheet" href="/css/timeline.css">

<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-4">俄乌动态新闻网</h1>
            <p class="fs-5 fw-light">为您提供战争动态最好的网站</p>
            <?= Html::tag('p', Html::a('成为会员 👋', ['/site/signup'],['class' => ['btn btn-outline-dark btn-lg']])); ?>
        </div>
    </div>

    <div class="body-content m-5">
        <div class="row d-flex justify-content-between">
            <div class="col-lg card bg-light border-light p-5 me-4" style="border-radius: 50px;">
                <h2>经济数据</h2>

                <p>时刻掌握战争中的经济数据，包括大宗商品价格、balabalabala。</p>

                <p><?= Html::a('查看经济数据 &raquo;', ['/site/charts'],['class' => ['btn btn-outline-secondary']]); ?></p>
            </div>
            <div class="col-lg card bg-light border-light p-5 ms-4" style="border-radius: 50px;">
                <h2>外交地图</h2>

                <p>在世界地图上查看外交动态，了解制裁、援助、花费数额、难民去向。</p>

                <p><?= Html::a('查看外交地图 &raquo;', ['/site/world'],['class' => ['btn btn-outline-secondary']]); ?></p>
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
