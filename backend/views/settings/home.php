<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\settings\HomeSettings */

$this->title = 'Страница - "Главная"';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['settings/home-page']];

?>

<?php $form = ActiveForm::begin(); ?>

    <div class="custom-form-section">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Контент на главную страницу</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
			        <?= $form->field($model, 'seo_title_pl')->textInput(['maxlength' => true]) ?>

			        <?= $form->field($model, 'seo_title_en')->textInput(['maxlength' => true]) ?>

			        <?= $form->field($model, 'seo_title_ru')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
			        <?= $form->field($model, 'seo_description_pl')->textInput(['maxlength' => true]) ?>

			        <?= $form->field($model, 'seo_description_en')->textInput(['maxlength' => true]) ?>

			        <?= $form->field($model, 'seo_description_ru')->textInput(['maxlength' => true]) ?>
                </div>
            </div>

            <br>

            <div class="row justify-content-between">

                <div class="col like-box">
					<?= $form->field($model, 'name_pl')->textInput() ?>
					<?= $form->field($model, 'body_pl')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 600,
							'removeWithoutAttr' => [],
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'pre', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'plugins' => [
								'fullscreen',
							],
						],
					]) ?>
                </div>

            </div>

            <br>

            <div class="row justify-content-between">

                <div class="col like-box">
					<?= $form->field($model, 'name_en')->textInput() ?>
					<?= $form->field($model, 'body_en')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 600,
							'removeWithoutAttr' => [],
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'plugins' => [
								'fullscreen',
							],
						],
					]) ?>
                </div>

            </div>

            <br>

            <div class="row justify-content-between">

                <div class="col like-box">
					<?= $form->field($model, 'name_ru')->textInput() ?>
					<?= $form->field($model, 'body_ru')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 600,
							'removeWithoutAttr' => [],
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'plugins' => [
								'fullscreen',
							],
						],
					]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col">
                    <div class="form-group">
                        <br>
						<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <br>
<?php ActiveForm::end(); ?>