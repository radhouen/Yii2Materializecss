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
       'css/font.css',
       'css/style.css',
       'css/materialize.min.css',
    ];
    public $js = [
       'js/init.js',
       'js/materialize.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
