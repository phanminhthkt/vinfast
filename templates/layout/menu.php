<div class="menu hidden-lg hidden-md hidden-sm hidden-xs">
    <div class="maxwidth">
       <ul>
            <li><a class="transition text-menu <?php if($com=='' || $com=='index') echo 'active'; ?>" href="trang-chu" title="Trang chủ"><h2><img src="assets/images/ic-home.png" alt="icon home"></h2></a></li>
            <li>
            <li><a class="transition text-menu <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu" title="<?=gioithieu?>"><h2><?=gioithieu?></h2></a></li>
            
            <li>
                <a class="transition text-menu <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="San phẩm"><h2>Sản phẩm</h2></a>
                <?php if(count($spmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($spmenu); $i++) { ?>
                            <li>
                                <a class="transition" title="<?=$spmenu[$i]['ten'.$lang]?>" href="<?=$spmenu[$i][$sluglang]?>">
                                    <img class="transition w-100" onerror="this.src='<?=THUMBS?>/135x100x1/assets/images/noimage.png';" alt="<?=$spmenu[$i]['ten'.$lang]?>" src="<?=THUMBS?>/135x100x1/<?=UPLOAD_PRODUCT_L.$spmenu[$i]['photo']?>">
                                    <h2><?=$spmenu[$i]['ten'.$lang]?></h2>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li><a class="transition text-menu <?php if($com=='dich-vu') echo 'active'; ?>" href="dich-vu" title="Dịch vụ"><h2>Dịch vụ</h2></a></li>
            <li>
                <a class="transition text-menu <?php if($com=='oto-dien') echo 'active'; ?>" href="oto-dien" title="Ô tô điện"><h2>Ô tô điện</h2></a>
                <?php if(count($xcmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($xcmenu); $i++) { ?>
                            <li>
                                <a class="transition" title="<?=$xcmenu[$i]['ten'.$lang]?>" href="<?=$xcmenu[$i][$sluglang]?>">
                                    <img class="transition w-100" onerror="this.src='<?=THUMBS?>/135x100x1/assets/images/noimage.png';" alt="<?=$xcmenu[$i]['ten'.$lang]?>" src="<?=THUMBS?>/135x100x1/<?=UPLOAD_PRODUCT_L.$xcmenu[$i]['photo']?>">
                                    <h2><?=$xcmenu[$i]['ten'.$lang]?></h2>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li><a class="transition text-menu <?php if($com=='khuyen-mai') echo 'active'; ?>" href="khuyen-mai" title="Khuyến mãi"><h2>Khuyến mãi</h2></a></li>
            <li><a class="transition text-menu <?php if($com=='mua-tra-gop') echo 'active'; ?>" href="mua-tra-gop" title="Mua trả góp"><h2>Mua trả góp</h2></a></li>
            <li><a class="transition text-menu <?php if($com=='show-room') echo 'active'; ?>" href="show-room" title="Show room vinfast"><h2>Show room vinfast</h2></a></li>
            <li>
                <a class="transition text-menu <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức"><h2>Tin tức</h2></a>
            </li>
            <li><a class="transition text-menu <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><h2><?=lienhe?></h2></a></li>
        <div class="clear"></div>
        </ul>
    </div>
</div>