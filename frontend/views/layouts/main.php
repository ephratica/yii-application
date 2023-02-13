<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use kartik\bs5dropdown\Dropdown;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark fixed-top shadow-lg bg-dark p-3',
        ],
    ]);
    $menuItems = [
        ['label' => '主页', 'url' => ['/site/index']],
        ['label' => '数据地图', 'url' => ['/site/world']],
        [
            'label' => '经济数据', //'url' => ['/site/charts'],
            'items' => [
                ['label' => '食物', 'url' => ['/se-status/food']],
                ['label' => '能源', 'url' => ['/se-status/energy']],
                ['label' => '金属', 'url' => ['/se-status/metal']],
                ['label' => '作物', 'url' => ['/se-status/crop']]
            ]
        ],
        [
            'label' => '军事数据',
            'items' => [
                ['label' => '军事能力总体对比', 'url' => ['/military-compare-total/index']],
                ['label' => '军事能力详细对比', 'url' => ['/r-u-military-comparison/index']],
                ['label' => '俄乌双方军事投入', 'url' => ['/ukraine-russia-military-expenditure/index']],
                ['label' => '乌克兰平民伤亡情况', 'url' => ['/ukraine-civilian-casualties/index']],
                ['label' => '乌克兰往返情况', 'url' => ['/ukraine-round-trip/index']],
                [
                    'label' => '俄罗斯损失',
                    'items' => [
                        ['label' => '设备损失','url' => ['/russia-loss/equipment']],
                        ['label' => '人员损失','url' => ['/russia-loss/personnel']]
                    ]
                ]
            ]  
        ],
        [
            'label' => '外交数据',
            'items' => [
                [
                    'label' => '援助数据', 
                    'items' => [
                        ['label' => '各国对乌克兰的援助(国家)','url' => ['/aid/country']],
                        ['label' => '各国对乌克兰的援助(时间)','url' => ['/aid/date']],
                        ['label' => '各国对乌克兰的援助(类型)','url' => ['/aid/type']]
                    ]
                    ],
                [
                    'label' => '制裁数据',
                    'items' => [
                        ['label' => '各国对俄罗斯的制裁(国家)','url' => ['/sanction-country/index']],
                        ['label' => '各国对俄罗斯的制裁(时间)','url' => ['/sanction-date/index']],
                        ['label' => '各国对俄罗斯的制裁(类型)','url' => ['/sanction-type/index']]
                    ]
                ]
            ]
        ],
        ['label' => '关于我们', 'url' => ['/site/about']],
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'dropdownClass' => Dropdown::classname(), 
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('登录',['/site/login'],['class' => ['btn btn-outline-light login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                '登出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0 mt-3">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
