<?php if(isset($popup) && $popup['hienthi'] == 1) { ?>
	<!-- Modal popup -->
	<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popupModalLabel"><?=$popup['ten'.$lang]?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="<?=$popup['link']?>"><img src="<?=THUMBS?>/800x530x1/<?=UPLOAD_PHOTO_L.$popup['photo']?>" alt="Popup"></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<div class="modal fade" id="form-baogiatuvan" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h6 class="modal-title" id="popupModalLabel">YÊU CẦU TƯ VẤN BÁO GIÁ</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?=(isset($noidungbaogia['noidung'.$lang]) && $noidungbaogia['noidung'.$lang] != '') ? htmlspecialchars_decode($noidungbaogia['noidung'.$lang]) : ''?>
				<div class="mb-4"></div>
				<form class="form-baogia_popup validation-baogia_popup" novalidate method="post" action="" enctype="multipart/form-data">
					<div class="input-baogia_popup">
						<select id="loaixe" name='loaixe' class="form-control">
							<option value=''>Chọn loại xe</option>
							<?php foreach($spmenu as $v){ ?>
							<option value='<?=$v['ten'.$lang]?>'><?=$v['ten'.$lang]?></option>
							<?php } ?>
						</select>
					</div>
					<div class="input-baogia_popup">
				        <div class="input-group input-user">
				            <div class="radio-user custom-control custom-radio mr-3 flex align-items-center">
				                <input type="radio" id="tragop" name="hinhthucthanhtoan" class="custom-control-input" value="Trả góp" required>
				                <label class="custom-control-label" for="tragop">Trả góp</label>
				            </div>
				            <div class="radio-user custom-control custom-radio mr-3">
				                <input type="radio" id="trahet" name="hinhthucthanhtoan" class="custom-control-input" value="Trả hết" required>
				                <label class="custom-control-label" for="trahet">Trả hết</label>
				            </div>
				            <div class="radio-user custom-control custom-radio">
				                <input type="radio" id="laithu" name="hinhthucthanhtoan" class="custom-control-input" value="Lái thử" required>
				                <label class="custom-control-label" for="laithu">Lái thử</label>
				            </div>
				        </div>
					</div>
					<div class="input-baogia_popup">
                        <input type="text" class="form-control" id="ten" name="ten" placeholder="<?=hoten?>" required />
                        <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                    </div>
                    <div class="input-baogia_popup">
                        <input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="<?=sodienthoai?>" required />
                        <div class="invalid-feedback"><?=vuilongnhapsodienthoai?></div>
                    </div>
                    <div class="input-baogia_popup">
                        <input type="text" class="form-control" id="diachi" name="diachi" placeholder="<?=diachi?>" required />
                        <div class="invalid-feedback"><?=vuilongnhapdiachi?></div>
                    </div>
                    <div class="input-baogia_popup">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                        <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit-baogia_popup" value="<?=gui?>" disabled />
                    <input type="reset" class="btn btn-secondary" value="<?=nhaplai?>" />
                    <input type="hidden" name="recaptcha_response_baogia_popup" id="recaptchaResponseBaogiaPopup">
                </form>
			</div>
		</div>
	</div>
</div>

<!-- Modal notify -->
<div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog" aria-labelledby="popup-notify-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-notify-label"><?=thongbao?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><?=thoat?></button>
			</div>
		</div>
	</div>
</div>

<!-- Modal cart -->
<div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-cart-label"><?=giohangcuaban?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
		</div>
	</div>
</div>

<?php /*
<!-- Modal prototype -->
<button type="button" class="btn btn-primary open-modal-cart" data-toggle="modal" data-target=".exampleModal">
	Open Modal
</button>
<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">Modal title</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
*/ ?>