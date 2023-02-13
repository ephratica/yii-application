<?php

use common\models\Files;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\FilesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="files-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'buttons' => ['view' => function ($url, $model, $key) {
                    $url = Url::to(['/site/download', 'fileName' => $model->name]);
                    return Html::a('下载 &raquo;', $url);
                }],
            ],

            'name',
            'download_times:integer',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Files $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'name' => $model->name]);
                 }
            ],
        ],
        
    ]); ?>


</div>
