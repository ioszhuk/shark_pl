<?php
namespace frontend\controllers;

use common\models\Client;
use common\models\Driver;
use common\models\Testimonial;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

	/**
	 * {@inheritdoc}
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
				'layout' => 'error'
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return mixed
	 */
	public function actionIndex()
	{
		$language = Yii::$app->language;

		$model = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'HomeSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'HomeSettings'),
			'name' => Yii::$app->settings->get("name_{$language}", 'HomeSettings'),
			'body' => Yii::$app->settings->get("body_{$language}", 'HomeSettings')
		];

		return $this->render('index', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionTestimonials()
	{
		$language = Yii::$app->language;

		$model = Testimonial::find()->where(['status' => Testimonial::ENABLE])->asArray()->all();

		return $this->render('testimonials', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionClients()
	{
		$language = Yii::$app->language;

		$model = Client::find()->orderBy('sort_order')->asArray()->all();

		return $this->render('clients', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionDrivers()
	{
		$language = Yii::$app->language;

		$model = Driver::find()->orderBy('sort_order')->asArray()->all();

		return $this->render('drivers', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionHelp()
	{
		$language = Yii::$app->language;

		$model = [
			'name' => Yii::$app->settings->get("name_{$language}", 'HelpSettings'),
			'body' => Yii::$app->settings->get("body_{$language}", 'HelpSettings')
		];

		return $this->render('help', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionContacts()
	{
		return $this->render('contacts');
	}

}