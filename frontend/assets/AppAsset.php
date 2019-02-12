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
		'css/common-style.css',
		'css/style.css',

	];
	public $js = [
		'js/owl-carousel.js',
		'js/youtube-resizer.js',
		'js/carousel-after-load.js',
		'js/custom.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
	];
}
