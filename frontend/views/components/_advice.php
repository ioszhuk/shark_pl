<section class="advice">
	<div class="container newblockform">
		<div class="detail-articles-box">
			<div class="visible-part">
				<h2><?= Yii::t('app', 'advice__title') ?></h2>
				<p><?= Yii::t('app', 'advice__caption') ?></p>
			</div>
		</div>
		<form method="post" id="formx" action="javascript:void(null)" onsubmit="formsend($(this))">
			<p class="first">
				<label for="nameform"><?= Yii::t('app', 'form_name') ?>:</label>
				<input type="text" id="nameform" name="username" required="required">
			</p>
			<p class="second">
				<label for="emailform"><?= Yii::t('app', 'form_email') ?>:</label>
				<input type="email" id="emailform" name="emaile" required="required">
			</p>
			<label for="messform"><?= Yii::t('app', 'form_client_advice') ?>:<a href="mailto:support@shark-taxi.pl">support@shark-taxi.pl</a></label>
			<textarea name="area" id="messform" cols="30" rows="10" required="required"></textarea>
			<p class="mail">
				<input class="sub" type="submit" value="<?= Yii::t('app', 'form_send') ?>">
			</p>
		</form>
	</div>
</section>