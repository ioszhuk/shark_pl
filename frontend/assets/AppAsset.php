<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public static $antiCacheCode;

	public $basePath = '@webroot';

	public $baseUrl = '@web';

	public $css = [
		'css/common-style.css',
		'css/style.css',
		'css/map-style.css',

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

	public function init()
	{
		parent::init();

		self::$antiCacheCode = rand(100, 99999999999999);

		if ( self::$antiCacheCode ) {

			foreach ($this->css as &$item) {
				$item .= '?' . self::$antiCacheCode;
			}

			foreach ($this->js as &$item) {
				$item .= '?' . self::$antiCacheCode;
			}

		}

	}

}
