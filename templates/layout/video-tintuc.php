<section id="video-news">
	<div class="maxwidth">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-12">
				<p class="title-intro"><span>TIN TỨC & SỰ KIỆN</span></p>
				<div class="newshome-intro w-clear">
					<div class="newshome-scroll">
						<ul>
							<li>
							<?php foreach($newsnb as $v) { ?>
								<a class="news text-decoration-none w-clear" href="<?=$v['tenkhongdauvi']?>" title="<?=$v['ten'.$lang]?>">
						            <p class="pic-news scale-img"><img onerror="this.src='<?=THUMBS?>/215x135x1/assets/images/noimage.png';" src="<?=THUMBS?>/215x135x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"></p>
						            <div class="info-news">
						                <h3 class="name-news"><?=$v['ten'.$lang]?></h3>
						                <div class="desc-news text-split"><?=$func->catchuoi($v['mota'.$lang],70)?></div>
						                <div class="link-news">
						                	Xem thêm <i class="fa fa-caret-right"></i>
						                </div>
						            </div>
						        </a>
							<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-12">
				<p class="title-intro"><span>Video clip</span></p>
				<div class="videohome-intro">
					<?=$addons->setAddons('video-fotorama', 'video-fotorama', 10);?>
				</div>
			</div>
		</div>
	</div>
</section>