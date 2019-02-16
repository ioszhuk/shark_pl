<?php

/**
 * @var $this \yii\web\View
 */

$this->title = Yii::t('app', 'testimonials__title');

?>

<section class="testimonials-content">
	<div class="container">

		<?= $this->render('@frontend/views/components/_download-our-apps') ?>

		<div class="row">
			<div class="col-xs-12">

				<h1 class="zagolovok2"  style="text-align: center;">Отзывы клиентов</h1>

				<br><br>

				<div class="cont-mommentaries">

                    <div class="cont-comm">
                        <div class="name">
                            <div class="img"><img width="76" height="76" src="https://shark-taxi.ua/wp-content/uploads/1.png" class="attachment-rew-md size-rew-md wp-post-image" alt=""></div>
                            <div class="name-persone">Ирина<br>Хотман</div>
                        </div>
                        <div class="rewiew-text">
                            Лучшее приложение из тех, что я видела.	</div>
                        <div itemprop="review" itemscope="" itemtype="http://schema.org/Review" style="display: none">
                            <span itemprop="itemReviewed">Шарк такси</span>
                            от <span itemprop="author">Ирина Хотман</span>,
                            <span itemprop="description">Лучшее приложение из тех, что я видела.</span>
                        </div>
                    </div>


				</div>
			</div>
		</div>
	</div>
</section>
