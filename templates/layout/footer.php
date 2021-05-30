<div class="clr"></div>
    <footer id="footer-home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 m-100">
                    <h4>Các dòng sản phẩm</h4>
                    <ul>
                        <?php foreach($proall as $v){ ?>
                            <li><a href="<?=$v[$sluglang]?>"><?=$v['ten'.$lang]?></a></li>
                        <?php } ?>               
                    </ul>
                </div>
                <div class="col-12 col-lg-3 m-100">
                    <h4>Hỗ trợ mua xe</h4>
                    <ul>
                        <li><a href="bang-gia">Bảng giá</a></li>
                        <li><a href="du-toan">Dự toán</a></li>
                        <li><a href="lai-thu">Lái thử</a></li>
                        <li><a href="khuyen-mai">Khuyến mãi</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3 m-100">
                    <h4>Dịch vụ khách hàng</h4>
                    <ul>
                                            
                    </ul>
                </div>
                <div class="col-12 col-lg-3 m-100">
                    <?=htmlspecialchars_decode($footer['noidung'.$lang])?>
                </div>
            </div>
        </div>
        <div class="copyright center">
            <p>© 2021 <?=$optsetting['website']?> - <a target="_blank" rel="nofollow"  href="<?=$optsetting['website']?>">. All Rights Reserved</a></p>
            <p>Tổng truy cập: <?=$counter['total']?> ║ 30 ngày qua: <?=$counter['month']?> ║ 7 ngày qua: <?=$counter['week']?> ║ Hôm qua: <?=$counter['yesterday']?> ║ Hôm nay: <?=$online?></p>
        </div>
</footer>






    