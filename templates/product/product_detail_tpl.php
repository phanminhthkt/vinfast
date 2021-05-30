<div class="container">
    <div id="car-top">
        <img class="left" src="<?=UPLOAD_PRODUCT_L.$row_detail['banner']?>" alt="<?=$row_detail['ten'.$lang]?>"/>
        <div id="car-heading">
            <h1><?=$row_detail['ten'.$lang]?></h1>
            <h2>Fadil Tiêu Chuẩn giá chỉ 382,500,000₫</h2>
            <h2>Fadil Nâng Cấp giá chỉ 413,100,000₫</h2>
            <h2>Fadil Cao Cấp giá chỉ 449,100,000₫</h2>       
        </div>
    </div>
</div>
<div class="clr"></div>
<nav id="car-nav">
    <div class="container">
        <ul>
            <li><a href="javascript:void(0);" onclick="$('html, body').animate({scrollTop: $('#car-highlight').offset().top - 70}, 300);">Nổi bật</a></li>
            <li><a href="javascript:void(0);" onclick="$('html, body').animate({scrollTop: $('#car-content').offset().top - 70}, 600);">Tổng quan</a></li>
            <li><a href="javascript:void(0);" onclick="$('html, body').animate({scrollTop: $('#car-specs').offset().top - 70}, 900);">Thông số</a></li>
            <li><a href="javascript:void(0);" onclick="$('html, body').animate({scrollTop: $('#car-related').offset().top - 70}, 1200);">Dòng xe khác</a></li>
            <li><a href="javascript:void(0);" onclick="$('#panel').fadeIn();">Yêu cầu tư vấn</a></li>
        </ul>
    </div>
</nav>
<div class="clr"></div>
<div class="container">
    <div id="car-highlight">
        <div id="car-promo">
            <?=(isset($row_detail['noibat'.$lang]) && $row_detail['noibat'.$lang] != '') ? htmlspecialchars_decode($row_detail['noibat'.$lang]) : ''?>
        </div>
            </div>
    <div class="clr"></div>
    <div id="car-slide">
        <div class="flexslider">
            <?php if(count($hinhanhsp) > 0) { ?>
            <ul class="slides">     
                <?php foreach($hinhanhsp as $v) { ?>
                <li data-thumb="<?=UPLOAD_PRODUCT_L.$v['photo']?>"><img src="<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"/>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
    </div>
    <div class="clr"></div>
    <article id="car-content">
        <?=(isset($row_detail['tongquan'.$lang]) && $row_detail['tongquan'.$lang] != '') ? htmlspecialchars_decode($row_detail['tongquan'.$lang]) : ''?>
    </article>
    <div class="clr border-bottom"></div>
    <h2 class="block-title">Thông số <?=$row_detail['ten'.$lang]?></h2>
    <div class="clr"></div>
    <article id="car-specs"><?=(isset($row_detail['thongso'.$lang]) && $row_detail['thongso'.$lang] != '') ? htmlspecialchars_decode($row_detail['thongso'.$lang]) : ''?></article>
</div>
<div class="clr"></div>
<div class="container fullWidth" id="car-related">
    <h2 class="block-title">Xem thêm các dòng xe khác</h2>
    <div class="clr"></div>
    <?php if(isset($product) && count($product) > 0) {  
        echo $func->get_product($product,'product-in','');
    }else{ ?>
        <div class="alert alert-warning" role="alert">
            <strong>
                <?=khongtimthayketqua?></strong>
        </div>
        <?php } ?>
        <div class="clear"></div>
        <div class="pagination-home">
            <?=(isset($paging) && $paging != '') ? $paging : ''?>
        </div>
</div>
