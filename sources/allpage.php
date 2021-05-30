<?php
    if(!defined('SOURCES')) die("Error");

    /* Query allpage */
    $favicon = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and hienthi > 0 limit 0,1",array('favicon','photo_static'));
    
    $logo = $d->rawQueryOne("select id, photo from #_photo where type = ? and act = ? limit 0,1",array('logo','photo_static'));

    $banner = $d->rawQueryOne("select id, photo from #_photo where type = ? and act = ? limit 0,1",array('banner','photo_static'));

    $slogan = $d->rawQueryOne("select ten$lang from #_static where type = ? limit 0,1",array('slogan'));
    
    $slogan_footer = $d->rawQueryOne("select ten$lang from #_static where type = ? limit 0,1",array('slogan-footer'));
    $noidungbaogia = $d->rawQueryOne("select noidung$lang from #_static where type = ? limit 0,1",array('noi-dung-bao-gia'));

    $slider = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('slide'));

    $footer = $d->rawQueryOne("select ten$lang, noidung$lang from #_static where type = ? limit 0,1",array('footer'));

    $descBaogia = $d->rawQueryOne("select ten$lang, noidung$lang from #_static where type = ? limit 0,1",array('content-baogia'));
    
    $proall = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, motangan$lang, ngaytao, id, photo,gia,banner from #_product where type = ? and hienthi > 0 order by stt asc",array('san-pham'));

    $cs = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo from #_news where type = ? and hienthi > 0 order by stt,id desc",array('chinh-sach'));

    $social = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoi'));
    $social_top = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoitop'));
    $social_footer = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc",array('mangxahoifooter'));
    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Newsletter */
    if(isset($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (isset($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (isset($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (isset($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            $data = array();
            $data['email'] = (isset($_REQUEST['email-newsletter']) && $_REQUEST['email-newsletter'] != '') ? htmlspecialchars($_REQUEST['email-newsletter']) : '';
            $data['ten'] = (isset($_REQUEST['name-newsletter']) && $_REQUEST['name-newsletter'] != '') ? htmlspecialchars($_REQUEST['name-newsletter']) : '';
            $data['diachi'] = (isset($_REQUEST['address-newsletter']) && $_REQUEST['address-newsletter'] != '') ? htmlspecialchars($_REQUEST['address-newsletter']) : '';
            $data['dienthoai'] = (isset($_REQUEST['phone-newsletter']) && $_REQUEST['phone-newsletter'] != '') ? htmlspecialchars($_REQUEST['phone-newsletter']) : '';
            $data['noidung'] = (isset($_REQUEST['noidung-newsletter']) && $_REQUEST['noidung-newsletter'] != '') ? htmlspecialchars($_REQUEST['noidung-newsletter']) : '';
            $data['ngaytao'] = time();
            $data['type'] = 'dangkynhantin';

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$config_base);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$config_base, false);
        }
    }

    if(isset($_POST['submit-baogia']))
    {
        $responseCaptcha = $_POST['recaptcha_response_baogia'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (isset($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (isset($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (isset($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Baogia') || $testCaptcha == true)
        {
            $data = array();
            $data['dienthoai'] = (isset($_REQUEST['phone-newsletter']) && $_REQUEST['phone-newsletter'] != '') ? htmlspecialchars($_REQUEST['phone-newsletter']) : '';
            $data['type'] = 'yeucaubaogia';
            $data['ngaytao'] = time();

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký nhận báo giá thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$config_base);
            }
            else
            {
                $func->transfer("Đăng ký nhận báo giá thất bại. Vui lòng thử lại sau.",$config_base, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận báo giá thất bại. Vui lòng thử lại sau.",$config_base, false);
        }
    }
    if(isset($_POST['submit-baogia_popup']))
    {
        $responseCaptcha = $_POST['recaptcha_response_baogia_popup'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (isset($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (isset($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (isset($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;

        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'BaogiaPopup') || $testCaptcha == true)
        {
            $data = array();
             $data['email'] = (isset($_REQUEST['email']) && $_REQUEST['email'] != '') ? htmlspecialchars($_REQUEST['email']) : '';
            $data['ten'] = (isset($_REQUEST['ten']) && $_REQUEST['ten'] != '') ? htmlspecialchars($_REQUEST['ten']) : '';
            $data['diachi'] = (isset($_REQUEST['diachi']) && $_REQUEST['diachi'] != '') ? htmlspecialchars($_REQUEST['diachi']) : '';
            $data['dienthoai'] = (isset($_REQUEST['dienthoai']) && $_REQUEST['dienthoai'] != '') ? htmlspecialchars($_REQUEST['dienthoai']) : '';
            $data['loaixe'] = (isset($_REQUEST['loaixe']) && $_REQUEST['loaixe'] != '') ? htmlspecialchars($_REQUEST['loaixe']) : '';
            $data['hinhthucthanhtoan'] = (isset($_REQUEST['hinhthucthanhtoan']) && $_REQUEST['hinhthucthanhtoan'] != '') ? htmlspecialchars($_REQUEST['hinhthucthanhtoan']) : '';
            $data['type'] = 'dangkybaogia';
            $data['ngaytao'] = time();
            $d->insert('newsletter',$data);

            /* Gán giá trị gửi email */
            $strThongtin = '';
            $emailer->setEmail('tennguoigui',$data['ten']);
            $emailer->setEmail('loaixe',$data['loaixe']);
            $emailer->setEmail('hinhthucthanhtoan',$data['hinhthucthanhtoan']);
            $emailer->setEmail('emailnguoigui',$data['email']);
            $emailer->setEmail('dienthoainguoigui',$data['dienthoai']);
            $emailer->setEmail('diachinguoigui',$data['diachi']);
            $emailer->setEmail('dienthoai',$data['dienthoai']);
            $emailer->setEmail('noidunglienhe',$data['noidung']);
            if($emailer->getEmail('tennguoigui'))
            {
                $strThongtin .= '<span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span><br>';
            }
            if($emailer->getEmail('emailnguoigui'))
            {
                $strThongtin .= '<a href="mailto:'.$emailer->getEmail('emailnguoigui').'" target="_blank">'.$emailer->getEmail('emailnguoigui').'</a><br>';
            }
            if($emailer->getEmail('diachinguoigui'))
            {
                $strThongtin .= ''.$emailer->getEmail('diachinguoigui').'<br>';
            }
            // if($emailer->getEmail('dienthoainguoigui'))
            // {
            //     $strThongtin .= 'Tel: '.$emailer->getEmail('dienthoainguoigui').'<br>';
            // }
            if($emailer->getEmail('loaixe'))
            {
                $strThongtin .= 'Loại xe: '.$emailer->getEmail('loaixe').'<br>';
            }
            if($emailer->getEmail('hinhthucthanhtoan'))
            {
                $strThongtin .= 'Hình thức: '.$emailer->getEmail('hinhthucthanhtoan').'';
            }
            $emailer->setEmail('thongtin',$strThongtin);

            /* Nội dung gửi email cho admin */
            $contentAdmin = '
            <table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
                <tbody>
                    <tr>
                        <td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
                                <tbody>
                                    <tr>
                                        <td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
                                            <table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding-bottom:10px;background-color:#fff" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
                                                            <div style="color:#fff;background-color:f2f2f2;font-size:11px">&nbsp;</div>
                                                            <table style="width:100%;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
                                                                        </td>
                                                                        <td style="padding:15px 20px 0 0;text-align:right">'.$emailer->getEmail('social').'</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style="background:#fff">
                                        <td align="left" height="auto" style="padding:15px" width="600">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào</h1>
                                                            <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Bạn nhận được thư liên hệ từ khách hàng <span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span> tại website '.$emailer->getEmail('company:website').'.</p>
                                                            <h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
                                                        </td>
                                                    </tr>
                                                <tr>
                                                <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444" valign="top">&nbsp;
                                                            <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;margin-top:0"><strong>Điện thoại: </strong> '.$emailer->getEmail('dienthoai').'<br>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;
                                                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> '.$emailer->getEmail('company:worktime').'. '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;
                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <table width="600">
                            <tbody>
                                <tr>
                                    <td>
                                    <p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
                                    Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
                                    <b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                </tbody>
            </table>';

            /* Nội dung gửi email cho khách hàng */
            $contentCustomer = '
            <table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
                <tbody>
                    <tr>
                        <td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
                                <tbody>
                                    <tr>
                                        <td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
                                            <table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding-bottom:10px;background-color:#fff" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
                                                            <div style="color:#fff;background-color:f2f2f2;font-size:11px">&nbsp;</div>
                                                            <table style="width:100%;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
                                                                        </td>
                                                                        <td style="padding:15px 20px 0 0;text-align:right">'.$emailer->getEmail('social').'</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr style="background:#fff">
                                        <td align="left" height="auto" style="padding:15px" width="600">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào Quý khách</h1>
                                                            <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Thông tin liên hệ của quý khách đã được tiếp nhận. '.$emailer->getEmail('company:website').' sẽ phản hồi trong thời gian sớm nhất.</p>
                                                            <h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
                                                        </td>
                                                    </tr>
                                                <tr>
                                                <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444" valign="top">&nbsp;
                                                            <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;margin-top:0"><strong>Điện thoại: </strong> '.$emailer->getEmail('dienthoai').'<br>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;
                                                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> '.$emailer->getEmail('company:worktime').'. '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;
                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
                                                <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        <table width="600">
                            <tbody>
                                <tr>
                                    <td>
                                    <p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
                                    Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
                                    <b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                </tbody>
            </table>';

            /* Send email admin */
            $arrayEmail = null;
            $subject = "Thư báo giá từ ".$setting['ten'.$lang];
            $message = $contentAdmin;
            $file = 'file';

            if($emailer->sendEmail("admin", $arrayEmail, $subject, $message, $file))
            {
                /* Send email customer */
                $arrayEmail = array(
                    "dataEmail" => array(
                        "name" => $emailer->getEmail('tennguoigui'),
                        "email" => $emailer->getEmail('emailnguoigui')
                    )
                );
                $subject = "Thư liên hệ từ ".$setting['ten'.$lang];
                $message = $contentCustomer;
                $file = 'file';

                if($emailer->sendEmail("customer", $arrayEmail, $subject, $message, $file)) $func->transfer("Gửi đăng ký báo giá thành công",$config_base);
            }
            else $func->transfer("Gửi đăng ký báo giá thất bại. Vui lòng thử lại sau",$config_base, false);
        }
        else
        {
            $func->transfer("Đăng ký nhận báo giá thất bại. Vui lòng thử lại sau.",$config_base, false);
        }
    }
?>