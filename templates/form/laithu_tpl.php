<div class="container">
	<div class="title-main">
		<h2>Lái thử</h2>
	</div>
	<form method="post" id="booking_form" class="page-form booking validation-laithu">
		<input type="hidden" name="content" value="Đăng ký lái thử">
		<div class="form-group clearfix">
			<h2>Thông tin xe</h2>
			<p>
				<label>Chọn dòng xe</label>
				<select id="booking_select_vehicle_preview" required name="loaixe" autocomplete="off">
					<option value="">Chọn</option>
					<?php foreach($proall as $k => $v){ ?>
						<option value='<?=$v['ten'.$lang]?>' data-id="<?=$k?>"><?=$v['ten'.$lang]?></option>
					<?php } ?>	
				</select>
			</p>
			<p class="booking-preview-vehicle">
				<?php foreach($proall as $k => $v){ ?>
				<img class="id-<?=$k?>" src="<?=UPLOAD_PRODUCT_L.$v['photo']?>">
				<?php } ?>
			</p>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
		<div class="form-group clearfix">
			<h2>Thông tin liên hệ</h2>
			<p>
				<label>Họ tên (*)</label>
				<input class="field" name="name" required />
			</p>
			<p>
				<label>Email</label>
				<input class="field" name="email" type="email" />
			</p>
			<p>
				<label>Điện thoại (*)</label>
				<input class="field" name="phone" required />
			</p>
			<p>
				<label>Địa chỉ</label>
				<input class="field" name="address" />
			</p>
			<p>
				<label></label>
				<input type="submit" class="btn btn-primary" name="submit-laithu" value="<?=gui?>" disabled />
				<input type="hidden" name="recaptcha_response_laithu" id="recaptchaResponseLaithu">
			</p>
			<div class="clr"></div>
		</div>
	</form>
</div>