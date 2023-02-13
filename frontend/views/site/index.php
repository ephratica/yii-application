<?php

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

                <p>掌握战争中的经济数据，包括食物、能源、金属和作物价格波动。</p>

                <p><?= Html::a('查看食物价格波动 &raquo;', ['/se-status/food'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看能源价格波动 &raquo;', ['/se-status/energy'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <p><?= Html::a('查看金属价格波动 &raquo;', ['/se-status/metal'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看作物价格波动 &raquo;', ['/se-status/crop'],['class' => ['btn btn-outline-secondary']]); ?></p>
            </div>
            <div class="col-lg card bg-light border-light p-5 ms-4" style="border-radius: 50px;">
                <h2>数据地图</h2>

                <p>在世界地图上查看外交动态，了解制裁、援助、花费数额、难民去向。</p>

                <p><?= Html::a('查看外交地图 &raquo;', ['/site/world'],['class' => ['btn btn-outline-secondary']]); ?></p>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class = "col-lg card bg-light border-light p-5 ms-4" style="border-radius: 50px;">
                <h2>军事数据</h2>

                <p>掌握战争中的军事数据，包括军事能力、军事投入、损失情况、往返情况。</p>

                <p><?= Html::a('查看军事能力的总体对比 &raquo;', ['/militar-compare-total/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看军事能力的详细对比 &raquo;', ['/r-u-military-comparison/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <p><?= Html::a('查看俄罗斯设备损失数据 &raquo;', ['russia-loss/equipment'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看俄罗斯人员损失数据 &raquo;', ['/russia-loss/personnel'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <p><?= Html::a('查看俄乌双方的军事投入 &raquo;', ['/ukraine-russia-military-expenditure/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('查看乌克兰的往返的情况 &raquo;', ['/ukraine-round-trip/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
                <p><?= Html::a('查看乌克兰平民伤亡情况 &raquo;', ['/ukraine-civilian-casualties/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
            </div>
            <div class = "col-lg card bg-light border-light p-5 ms-4" style="border-radius: 50px;">
                <h2>外交数据</h2>

                <p>掌握战争中的外交数据，包括军事能力、军事投入、损失情况、往返情况。</p>
                
                <h5>各国援助乌克兰数据</h5>
                <p><?= Html::a('国家/价值 &raquo;', ['/aid/country'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('时间/价值 &raquo;', ['/aid/date'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('类型/价值 &raquo;', ['/aid/type'],['class' => ['btn btn-outline-secondary']]); ?></p>

                <h5>各国制裁俄罗斯数据</h5>
                <p><?= Html::a('国家/价值 &raquo;', ['/sanction-country/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('时间/价值 &raquo;', ['/sanction-date/index'],['class' => ['btn btn-outline-secondary']]); ?>
                <?= Html::a('类型/价值 &raquo;', ['/sacntion-type/index'],['class' => ['btn btn-outline-secondary']]); ?></p>
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
