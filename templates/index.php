<!DOCTYPE html>
<html lang="<?=$config['website']['lang-doc']?>">
<head>
    <?php include TEMPLATE.LAYOUT."head.php"; ?>
    <?php include TEMPLATE.LAYOUT."css.php"; ?>
</head>
<body>
    <?php
        include TEMPLATE.LAYOUT."seo.php";
        include TEMPLATE.LAYOUT."header.php";
    ?>     
    <section id="page-home">          
    <?php   //include TEMPLATE.LAYOUT."mmenu.php";                
        if($source=='index')  include TEMPLATE.LAYOUT."slide.php";
        if($source!=='index')  //include TEMPLATE.LAYOUT."breadcrumb.php";
    ?>
        <?php include TEMPLATE.$template."_tpl.php"; ?>
    </section> 
    <?php
        include TEMPLATE.LAYOUT."footer.php";
        include TEMPLATE.LAYOUT."modal_fix.php";
        include TEMPLATE.LAYOUT."js.php";
        //if($deviceType=='mobile') include TEMPLATE.LAYOUT."phone.php";
    ?>
</body>
</html>