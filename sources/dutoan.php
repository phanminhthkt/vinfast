<?php 
	if(!defined('SOURCES')) die("Error");
	if(isset($_GET['car']))
	{
		$row_detail = $d->rawQueryOne("select gia,phibienso,phisudungduongbo,baohiemtnds,phikiemdinh,mauxe from #_product where id = ? and hienthi > 0 limit 0,1",array($_GET['car']));
		$arr_mauxe_detail = json_decode($row_detail['mauxe'],true);

		$tongchiphi = $row_detail['gia'] + $row_detail['gia']*0.1  + $row_detail['phisudungduongbo'] + $row_detail['baohiemtnds'] + $row_detail['phikiemdinh'];
	}
?>