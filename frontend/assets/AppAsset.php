<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/normalize.css',
        'css/index.css',
        'css/site.css',
    ];
    public $js = [
        'js/vue.js',
        'js/index.js',
        'js/cdzw.js'
    ];

}
