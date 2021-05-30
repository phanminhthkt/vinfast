<?php if(count($slider)) { ?>
<div class="module-slider">
    <div class="flexslider">
        <ul class="slides">
             <?php foreach($slider as $k => $v) { ?>
            <li><a href="" class="vp169" style="background-image: url(<?=UPLOAD_PHOTO_L.$v['photo']?>)"><img src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$k+1?>"/></a></li>
             <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>