
<div class="container fullWidth">
	<!-- Mua xe nhanh -->
	<h1 class="block-title">Mua xe nhanh tại <?=$setting['ten'.$lang]?></h1>
	<div class="tool-button center">
		<a href="du-toan">
			<img src="assets/images/i-1.png" alt="Dự toán chi phí"><h4>Dự toán</h4>
		</a>
		<a href="lai-thu">
			<img src="assets/images/i-2.png" alt="Đăng ký lái thử"><h4>Lái thử</h4>
		</a>
		<a href="khuyen-mai">
			<img src="assets/images/i-3.png" alt="Chương trình khuyến mãi"><h4>Khuyến mãi</h4>
		</a>
		<a href="javascript:void(0);" onclick="$('#panel').fadeIn();">
			<img src="assets/images/i-4.png" alt="Yêu cầu báo giá"><h4>Báo giá</h4>
		</a>
	</div>
	<div class="clr"></div>
	<!-- Dòng xe hot -->
	<h2 class="block-title">Dòng xe HOT tại <?=$setting['ten'.$lang]?></h2>
	<div class="clr"></div>
	<div class="row border-bottom">
		<?php foreach($pronew as $v){ ?>
		<div class="col col-4">
			<a href="<?=$v[$sluglang]?>" class="module-car">
				<div class="scale-img"><img src="<?=UPLOAD_PRODUCT_L.$v['banner']?>" alt="<?=$v['ten'.$lang]?>" class="left"></div>
				<h3 class="name">
					<?=$v['ten'.$lang]?>
					<b>Giá từ:
						<span><?=(isset($v['gia']) && $v['gia']!=0 ) ? $func->format_money($v['gia'],'đ') : 'Liên hệ'?></span>
					</b>
				</h3>
			</a>
		</div>
		<?php } ?>
	</div>
</div>

<!-- Xem tất cả dòng xe -->
<div class="clr"></div>
<h2 class="block-title">Xem tất cả dòng xe</h2>
<div class="mobile-scroll-x">
	<ul class="home-cars-icon">
		<?php foreach($proall as $k => $v){ ?>
		<li>
			<a href="javascript:void(0);" onclick="$('.home-car').fadeOut(800);$('#car-id-<?=$k?>').fadeIn(800);"><img src="<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"><label><?=$v['ten'.$lang]?></label></a>		
		</li>
		<?php } ?>	
	</ul>
</div>
<div class="clr"></div>

<div class="home-cars" style="background-image: url(<?=UPLOAD_PHOTO_L.$quangcao['photo']?>);">
 	<div class="container">
 		<?php foreach($proall as $k => $v){ ?>
		<div class="home-car" id="car-id-<?=$k?>">
			<a href="/xe-vinfast-fadil"><h3 class="name"><?=$v['ten'.$lang]?></h3></a>
			<p class="price">Giá từ 382,500,000₫</p>
			<img src="<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" class="right">
		</div>
		<?php } ?>
	</div>
</div>

<div class="container fullWidth">
	<div class="clr border-bottom"></div>
	<h2 class="block-title">Thông tin mới từ <?=$setting['ten'.$lang]?></h2>
	<div class="clr"></div>
	<div class="row row-10"> 
		<?php 	foreach($newsnb as $v){ ?>
			<div class="col-md-4 col-12 col-sm-6 padding-10">
	            <div class="flipper-col news3D">
					<div class="flipper-item">
						<div class="flipper-front" style="background-image: url(<?=UPLOAD_NEWS_L.$v['photo']?>);">
							<div class="inner">
								<h3><?=$v['ten'.$lang]?></h3>
							</div>
						</div>
						<div class="flipper-back" style="background-image: url(<?=UPLOAD_NEWS_L.$v['photo']?>);">
							<div class="inner">
								<h3><?=$v['ten'.$lang]?></h3>
								<p><?=$v['mota'.$lang]?></p>
								<a href="<?=$v['tenkhongdauvi']?>" title="Xem thêm" class="xt">
								<?=xemthem?> <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
	        </div>              
			<?php } ?>
		</div>
	<div class="clr"></div>
</div>