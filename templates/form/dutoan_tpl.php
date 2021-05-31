<div class="container" id="fee_main">
	<div class="title-main">
		<h2>Dự toán</h2>
	</div>
	<div class="row">
			<div class="col col-6">
				<p>
					<form id="frm-car" method="get">
						<label>Chọn xe</label>
						<select class="input-txt" name="car" onchange='$("#frm-car").submit();'>
							<option>Chọn dòng xe</option>
							<?php foreach($proall as $v){ ?>
							<option value='<?=$v['id']?>' 
								<?=@$_GET['car']==$v['id'] ? 'selected':''?>

							>
								<?=$v['ten'.$lang]?></option>
							<?php } ?>
						</select>
					</form>
				</p>
				<p>
					<label>Phiên bản</label>
					<select class="input-txt" id="price" name="option">
						<option value="">Chọn phiên bản</option>
						<?php 
			            if(count($arr_mauxe_detail)){
			            foreach($arr_mauxe_detail as $v_mauxe){ ?>
						<option value="<?=$v_mauxe['giabanle']?>"><?=$v_mauxe['mauxe']?></option>			
						<?php }} ?>		
					</select>
				</p>
				<p>
					<label>Nơi đăng ký trước bạ</label>
					<select class="input-txt" id="local" name="loc">
						<option value="0">Chọn khu vực ra biển số</option>

						<option value="20000000" data-registration="10" data-license="20000000">Hồ Chí Minh</option><option value="20000000" data-registration="12" data-license="20000000">Hà Nội</option><option value="1000000" data-registration="10" data-license="1000000">Tỉnh thành khác</option>					</select>
				</p>
				<!-- <p>
					<label>Khoảng trả trước (Nếu mua trả góp)</label>
					<input class="input-txt" id="deposit" min="0" max="0" value="0">
				</p>
				<p>
					<label>Thời hạn vay</label>
					<select class="input-txt" id="month" name="month">
						<option value="12">1 năm</option>
						<option value="24">2 năm</option>
						<option value="36">3 năm</option>
						<option value="48">4 năm</option>
						<option value="60">5 năm</option>
						<option value="72">6 năm</option>
						<option value="84">7 năm</option>
						<option value="96">8 năm</option>
					</select>
				</p>
				<p>
					<label>Lãi suất</label>
					<input class="input-txt" id="rate" value="8.9">
				</p> -->
				<!-- <button onclick="calc();">Ước tính chi phí trả góp</button> -->
			</div>
			<div class="col col-6 col-res" id="mobileres">
				<h2 class="fee-heading">Ước tính giá xe lăn bánh</h2>
				<p>Giá xe (bao gồm VAT)
					<font class="right" >
					<span id="res_price"><?=(isset($row_detail['gia']) && $row_detail['gia']!=0 ) ? $func->format_money($row_detail['gia'],'') : '0'?></span> đ</font>
				</p>
				<p>Phí trước bạ (10%)
					<font class="right">
					<span id="res_fee">
						<?=(isset($row_detail['gia']) && $row_detail['gia']!=0 ) ? $func->format_money($row_detail['gia']*0.1,'') : '0'?>
					</span>
					đ
				</font>
				</p>
				<p>Phí Biển Số
					<font class="right">
					<span id="res_local">
					0</span> đ</font>
				</p>
				<p>Phí sử dụng đường bộ<font class="right">
					<span id="insurance"><?=(isset($row_detail['phisudungduongbo']) && $row_detail['phisudungduongbo']!=0 ) ? $func->format_money($row_detail['phisudungduongbo'],'') : '0'?></span> đ</font></p>
				<p>Bảo hiểm TNDS
					<font class="right">
					<span id="road"><?=(isset($row_detail['baohiemtnds']) && $row_detail['baohiemtnds']!=0 ) ? $func->format_money($row_detail['baohiemtnds'],'') : '0'?>
						
					</span> đ</font></p>
				<p>Phí kiểm định<font class="right">
					<span id="phikiemdinh"><?=(isset($row_detail['phikiemdinh']) && $row_detail['phikiemdinh']!=0 ) ? $func->format_money($row_detail['phikiemdinh'],'') : '0'?></span> đ</font></p>
				<h3><font class="right">Tổng chi phí
					<span id="res_total"><?=(isset($tongchiphi) && $tongchiphi!=0 ) ? $func->format_money($tongchiphi,'') : '0'?> </span>đ</font></h3>
			</div>
			<!-- <div id="installment-res" class="col col-6 col-res">
				<h2 class="fee-heading">Ước tính chi phí mua xe trả góp</h2>
				<p>Khoản vay<span class="right" id="res_surplus">0 VNĐ</span></p>
				<p>Số tiền trả tháng đầu<span class="right" id="res_first">0 VNĐ</span></p>
				<p>Số tiền trả tháng cuối<span class="right" id="res_last">0 VNĐ</span></p>
				<p>Số tiền trả trung bình<span class="right" id="res_average">0 VNĐ</span></p>
			</div> -->
		</div>
<script>
	function fee() {
		var price = parseInt($("#price").val());
		var fee = price * 0.1;
		var local = parseInt($("#local").val());
		var registration =parseInt('<?=(isset($row_detail['phikiemdinh']) && $row_detail['phikiemdinh']!=0 ) ? $row_detail['phikiemdinh'] : '0'?>');
		var insurance =parseInt('<?=(isset($row_detail['phisudungduongbo']) && $row_detail['phisudungduongbo']!=0 ) ? $row_detail['phisudungduongbo'] : '0'?>');
		var road = parseInt('<?=(isset($row_detail['baohiemtnds']) && $row_detail['baohiemtnds']!=0 ) ? $row_detail['baohiemtnds'] : '0'?>');
		var total = price + fee + local + registration + insurance + road;
		// alert(registration);
		$('#res_price').html(price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' ');
		$('#res_local').html(local.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' ');
		// $('#res_fee').html(fee.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' ');
		$('#res_total').text(total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' ');
		// $('#deposit').val(fee.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
		// $('#deposit').attr("min", fee);
		// $('#deposit').attr("max", fee * 9);
	}

	function calc() {
		var price = parseInt($("#price").val());
		var rate = parseFloat($("#rate").val().toString().replace(/\,/g, ''));
		var deposit = parseInt($("#deposit").val().toString().replace(/\,/g, ''));
		var month = parseInt($("#month").val());
		var surplus = price - deposit;
		$('#res_surplus').html(surplus.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
		var amount = surplus / month;
		var first = Math.floor(amount + (surplus * rate / 1200));
		$('#res_first').html(first.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
		var last = Math.floor(amount + (amount * rate / 1200));
		$('#res_last').html(last.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
		var average = Math.floor((last + first) / 2);
		$('#res_average').html(average.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
		$('html, body').animate({
			scrollTop: $('#mobileres').offset().top - 50
		}, 500);
	}
</script>
</div>