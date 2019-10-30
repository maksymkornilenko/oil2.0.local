<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        //'/css/bootstrap.css',
        //'/css/fonticons.css',
        //'/css/font-awesome.min.css',
        '/css/bootsnav.css',
        '/css/style.css',
        //'/css/responsive.css'
        '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css',
    ];
    public $js = [
        //'/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
        //'/js/jquery.easing.1.3.js',
        //'/js/plugins.js',
        '/js/main.js',
        //'/js/vendor/bootstrap.min.js',
        '/js/lan.js',
        '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js',

    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
