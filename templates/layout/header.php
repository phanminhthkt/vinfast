<header id="header-page-home">
	<div class="container">
		<a href=""><img id="logo" src="<?=UPLOAD_PHOTO_L.$logo['photo']?>"></a>
		<ul id="menu" class="right">
			<li><a href="">Trang chủ</a></li>
			<li><a href="gioi-thieu">Giới thiệu</a></li>
			<li id="header-car-menu">
				<a href="san-pham">Sản phẩm</a>
			</li>
			<li><a href="du-toan">Dự toán</a></li>
			<li><a href="lai-thu">Lái thử</a></li>
			<li><a href="dich-vu">Dịch vụ</a></li>
			<li><a href="khuyen-mai">Khuyến mãi</a></li>
			<li><a href="tin-tuc">Tin tức</a></li>
			<li><a href="lien-he">Liên hệ</a></li>
		</ul>
		<a class="button-menu mobile" href="javascript:void(0);" onclick="$('#menu').slideToggle();" rel="nofollow">☰</a>
	</div>
	<div id="header-car">
		<div class="container">
				<?php foreach($proall as $v){ ?>
			<div class="header-car">
				<a href="<?=$v[$sluglang]?>">
					<img src="<?=THUMBS?>/215x125x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
					<label>Xe VinFast Fadil</label>
					<span>Giá từ <?=(isset($v['gia']) && $v['gia']!=0 ) ? $func->format_money($v['gia'],'đ') : 'Liên hệ'?>

					<?php if($v['giacu']!=0){ ?>
						<del><?=(isset($v['giacu']) && $v['giacu']!=0 ) ? $func->format_money($v['giacu'],'đ') : 'Liên hệ'?></del>
					<?php } ?>
					</span>
				</a>
			</div>
				<?php } ?>
		</div>
	</div>
</header>