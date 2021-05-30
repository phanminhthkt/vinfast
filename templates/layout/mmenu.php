<div class="menu-res hidden-xl">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="fa fa-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword2" id="keyword2" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword2');"/>
                <p onclick="onSearch('keyword2');"><i class="fa fa-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="trang-chu" title="Trang chủ"><img src="assets/images/ic-home.png" alt="icon home"></a></li><li>
            <li><a href="gioi-thieu" title="<?=gioithieu?>"><?=gioithieu?></a></li>
            
            <li>
                <a  href="san-pham" title="San phẩm">Sản phẩm</a>
                <?php if(count($spmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($spmenu); $i++) { ?>
                            <li>
                                <a title="<?=$spmenu[$i]['ten'.$lang]?>" href="<?=$spmenu[$i][$sluglang]?>">
                                    <?=$spmenu[$i]['ten'.$lang]?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li><a href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
            <li>
                <a href="oto-dien" title="Ô tô điện">Ô tô điện</a>
                <?php if(count($xcmenu)) { ?>
                    <ul>
                        <?php for($i=0;$i<count($xcmenu); $i++) { ?>
                            <li>
                                <a class="transition" title="<?=$xcmenu[$i]['ten'.$lang]?>" href="<?=$xcmenu[$i][$sluglang]?>">
                                    <?=$xcmenu[$i]['ten'.$lang]?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
            <li><a href="khuyen-mai" title="Khuyến mãi">Khuyến mãi</a></li>
            <li><a href="mua-tra-gop" title="Mua trả góp">Mua trả góp</a></li>
            <li><a href="show-room" title="Show room vinfast">Show room vinfast</a></li>
            <li><a href="tin-tuc" title="Tin tức">Tin tức</a></li>
            <li><a href="lien-he" title="<?=lienhe?>"><?=lienhe?></a></li>
    </ul>
    </nav>
</div>