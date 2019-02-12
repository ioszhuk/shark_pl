<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
	<?= Html::csrfMetaTags() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= Html::encode($this->title) ?></title>

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="alternate" hreflang="ru-UA" href="https://shark-taxi.pl">
    <link rel="alternate" hreflang="en-UA" href="https://shark-taxi.pl/en">
    <link rel="alternate" hreflang="uk-UA" href="https://shark-taxi.pl/ru">

    <meta property="og:title" content="Shark Taxi - служба такси">
    <meta property="og:description" content="Служба такси">
    <meta property="og:image" content="/image/mobile-logotype.jpg">
    <meta name="apple-itunes-app" content="app-id=779587448">

    <link rel="canonical" href="https://shark-taxi.pl/">

	<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<?= $this->render('_components/_header') ?>

<?= $content ?>

<?= $this->render('_components/_footer') ?>

<?= $this->render('_modal/_thanks-for-review') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>