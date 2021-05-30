<div class="form-group col-md-12">
    <div class="row">
        <div class="col-lg-4">
            <input type="text" name="mauxe[]" placeholder="Mẫu xe" class="form-control"></div>
        <div class="col-lg-3">
            <input type="text"  name="giabanle[]" placeholder="Giá bán lẻ" class="format-price form-control">
        </div>
       <!--  <div class="col-lg-3">
            <input type="text"  name="khuyenmai[]" placeholder="Giá khuyến mãi" class="format-price form-control">
        </div> -->
        <div class="col-lg-1">
            <button type="button" class="btn-del btn btn-md btn-danger wh-38"><i class="fa fa-times"></i></button>
        </div>
    </div>
</div>
<Script>
$(document).ready(function(){
    $(".format-price").priceFormat({
        limit: 13,
        prefix: '',
        centsLimit: 0
    });
})
</Script>

