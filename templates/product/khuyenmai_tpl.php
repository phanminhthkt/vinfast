<div class="maxwidth">
    <div class="content-main w-clear">
        <div class="title-main"><h2><?=(@$title_cat!='')?$title_cat:@$title_crumb?></h2></div>
            <?php if(isset($product) && count($product) > 0) { ?> 
                <div class="product-emotion-all"> 
                    <?php foreach($product as $k => $v){ 
                        $arr_mauxe = json_decode($v['mauxe'],true);
                    ?> 
                        <div class="product-emotion">
                            <div class="row">
                                <div class="col-md-3">
                                     <a href="<?=$v['tenkhongdauvi']?>">
                                        <h3 class="name-product"><?=$v['ten'.$lang]?></h3>
                                        <div class="scale-img">
                                            <img class="transition w-100" onerror="this.src='<?=THUMBS?>/380x300x1/assets/images/noimage.png';" alt="<?=$v['ten'.$lang]?>" src="<?=THUMBS?>/380x300x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <div class="phienban">
                                        <ul class="pb_1">
                                            <li>Mẫu xe</li>
                                            <li>Giá bán lẻ khuyến nghị</li>
                                            <li>Khuyến mãi</li>
                                        </ul>
                                        <?php 
                                        if(count($arr_mauxe)){
                                        foreach($arr_mauxe as $v_mauxe){ ?>
                                        <ul class="pb_2">
                                            <li><?=$v_mauxe['mauxe']?></li>
                                            <li><?=(isset($v_mauxe['giabanle']) && $v_mauxe['giabanle']!=0 ) ? $func->format_money($v_mauxe['giabanle']) : 'Liên hệ'?></li>
                                            <li><?=(isset($v_mauxe['khuyenmai']) && $v_mauxe['khuyenmai']!=0 ) ? $func->format_money($v_mauxe['khuyenmai']) : 'Liên hệ'?></li>
                                        </ul>
                                        <?php } } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php }else{ ?>
                <div class="alert alert-warning" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            <?php } ?>
        <div class="clear"></div>
        <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    </div>
</div>