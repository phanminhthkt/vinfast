<section id="tieuchi">
	<div class="maxwidth">
		<div class="owl-carousel owl-theme owl-carousel_tieuchi">
			<?php foreach($tieubieu as $k => $v){ ?>
				<div class="tieuchi-items">
					<a href="<?=$v[$sluglang]?>">
						<div class="tieuchi-items__img scale-img">
							<img onerror="this.src='<?=THUMBS?>/380x220x1/assets/images/noimage.png';" src="<?=THUMBS?>/380x220x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
						</div>
						<div class="tieuchi-items__content transition">
							<h3><?=$v['ten'.$lang]?></h3>
							<p><?=$v['mota'.$lang]?></p>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>