<?php
    /* Đăng ký nhận tin */
    $nametype = "dangkybaogia";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký báo giá";
    $config['newsletter'][$nametype]['file'] = false;
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = true;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = true;
    $config['newsletter'][$nametype]['hinhthucthanhtoan'] = true;
    $config['newsletter'][$nametype]['loaixe'] = true;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    // $config['newsletter'][$nametype]['tinhtrang'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

    /* Đăng ký nhận tin */
    $nametype = "yeucaubaogia";
    $config['newsletter'][$nametype]['title_main'] = "Yêu cầu báo giá";
    $config['newsletter'][$nametype]['file'] = false;
    $config['newsletter'][$nametype]['email'] = false;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = false;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = false;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = false;
    $config['newsletter'][$nametype]['ghichu'] = false;
    // $config['newsletter'][$nametype]['tinhtrang'] = array("1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = false;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = false;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';
?>