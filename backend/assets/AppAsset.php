<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/world-map.css',
    ];
    public $js = [
        'js/d3.v4.js',
        'js/d3-geo-projection.v2.min.js',
        'js/d3-scale-chromatic.v1.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
