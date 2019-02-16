<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\settings\HomeSettings */

$this->title = 'Страница - "О компании"';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['settings/about-us']];

?>

<?php $form = ActiveForm::begin(
	[
		'fieldClass' => 'noIT\core\widgets\ActiveField'
	]
); ?>

    <div class="custom-form-section">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Страница - "О компании"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'about_us__name')->textInput()->help('http://joxi.ru/12MEgWocM5G9P2') ?>
                </div>
            </div>

            <div class="row justify-content-between">

                <!-- -->

                <div class="col like-box">
					<?= $form->field($model, 'about_us__teaser')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'plugins' => [
								'fullscreen',
								'table',
								'video',
							],
						],
					])->help('http://joxi.ru/Dr8Zad7T47l9w2') ?>
                </div>

                <!-- -->

            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'about_us__body')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'image', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'imageUpload' => Url::to(['settings/body-image-upload']),
							'imageManagerJson' => Url::to(['settings/body-images-get']),
							'imageDelete' => Url::to(['settings/body-file-delete']),
							'plugins' => [
								'fullscreen',
								'table',
								'video',
							],
						],
						'plugins' => [
							'imagemanager' => 'vova07\imperavi\bundles\ImageManagerAsset',
						],
					]) ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'about_us__work_principles')->widget(MultipleInput::className(), [
						'allowEmptyList'    => false,
						'enableGuessTitle'  => false,
						'sortable' => true,
						'columns' => [
							[
								'name'  => 'name',
								'title' => 'Название',
							],
						]
					])->help('http://joxi.ru/1A5dL5kHnME572') ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'about_us__main_services')->widget(MultipleInput::className(), [
						'allowEmptyList'    => false,
						'enableGuessTitle'  => false,
                        'sortable' => true,
						'columns' => [
							[
								'name'  => 'name',
								'title' => 'Название',
							],
							[
								'name'  => 'icon_class',
								'title' => 'Класс иконки',
							],
							[
								'name'  => 'icon_tag',
								'title' => 'Хеш-тег иконки',
							],
						]
					])->help('http://joxi.ru/eAOBELoHxBnRP2') ?>
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

    <div class="custom-form-section" style="margin-top: 30px;">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Страница - "Фингарантии"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'finance_guarantee__name')->textInput() ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'finance_guarantee__teaser')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
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
                <div class="col like-box">
					<?= $form->field($model, 'finance_guarantee__body')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'image', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'imageUpload' => Url::to(['settings/body-image-upload']),
							'imageManagerJson' => Url::to(['settings/body-images-get']),
							'imageDelete' => Url::to(['settings/body-file-delete']),
							'plugins' => [
								'fullscreen',
								'table',
								'video',
							],
						],
						'plugins' => [
							'imagemanager' => 'vova07\imperavi\bundles\ImageManagerAsset',
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

    <div class="custom-form-section" style="margin-top: 30px;">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Страница - "Вакансии"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'vacancy__name')->textInput() ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'vacancy__teaser')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
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
                <div class="col like-box">
					<?= $form->field($model, 'vacancy__body')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'image', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'imageUpload' => Url::to(['settings/body-image-upload']),
							'imageManagerJson' => Url::to(['settings/body-images-get']),
							'imageDelete' => Url::to(['settings/body-file-delete']),
							'plugins' => [
								'fullscreen',
								'table',
								'video',
							],
						],
						'plugins' => [
							'imagemanager' => 'vova07\imperavi\bundles\ImageManagerAsset',
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

    <div class="custom-form-section" style="margin-top: 30px;">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Страница - "Контакты"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'contacts__name')->textInput() ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'contacts__teaser')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
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
                <div class="col like-box">
					<?= $form->field($model, 'contacts__body')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'image', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'imageUpload' => Url::to(['settings/body-image-upload']),
							'imageManagerJson' => Url::to(['settings/body-images-get']),
							'imageDelete' => Url::to(['settings/body-file-delete']),
							'plugins' => [
								'fullscreen',
								'table',
								'video',
							],
						],
						'plugins' => [
							'imagemanager' => 'vova07\imperavi\bundles\ImageManagerAsset',
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

    <div class="custom-form-section" style="margin-top: 30px;">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Страница - "Бонусная программа"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'bonus__name')->textInput() ?>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'bonus__teaser')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
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
                <div class="col like-box">
					<?= $form->field($model, 'bonus__body')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 200,
							'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'image', 'link', 'alignment', 'horizontalrule'],
							'formatting' => ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
							'imageUpload' => Url::to(['settings/body-image-upload']),
							'imageManagerJson' => Url::to(['settings/body-images-get']),
							'imageDelete' => Url::to(['settings/body-file-delete']),
							'plugins' => [
								'fullscreen',
								'table',
								'video',
							],
						],
						'plugins' => [
							'imagemanager' => 'vova07\imperavi\bundles\ImageManagerAsset',
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