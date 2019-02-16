<?php

/**
 * @var $this \yii\web\View
 * @var $model \common\models\Testimonial
 * @var string $language
 */

use yii\helpers\Html;

?>
<div id="reviews" class="owl-carousel">
    <?php foreach ($model as $item) : ?>
	<div class="item">
		<div class="review">
			<div class="comment">
					<?= $item["body_{$language}"] ?>
            </div>
			<table style="vertical-align: middle;">
				<tr>
					<td>
						<div class="review-photo">
							<?= Html::img($item->getThumbUploadUrl('avatar', 'thumb'));?>
						</div>
					</td>
					<td><p class="autor"><?= $item["name_{$language}"] ?></p></td>
				</tr>
			</table>
		</div>
	</div>
    <?php endforeach ?>
	<!---->
</div>

