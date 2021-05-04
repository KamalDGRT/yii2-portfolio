<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DefaultthemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/public/theme/t1/assets/css/LineIcons.css',
        '/public/theme/t1/assets/css/magnific-popup.css',
        '/public/theme/t1/assets/css/default.css',
        '/public/theme/t1/assets/css/style.css'
    ];
    public $js = [
        "/public/theme/t1/assets/js/vendor/modernizr-3.6.0.min.js",
        "/public/theme/t1/assets/js/vendor/jquery-1.12.4.min.js",
        "/public/theme/t1/assets/js/popper.min.js",
        "/public/theme/t1/assets/js/jquery.magnific-popup.min.js",
        "/public/theme/t1/assets/js/parallax.min.js",
        "/public/theme/t1/assets/js/waypoints.min.js",
        "/public/theme/t1/assets/js/jquery.counterup.min.js",
        "/public/theme/t1/assets/js/jquery.appear.min.js",
        "/public/theme/t1/assets/js/scrolling-nav.js",
        "/public/theme/t1/assets/js/jquery.easing.min.js",
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
