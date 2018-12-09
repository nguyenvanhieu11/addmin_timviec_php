<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Chi tiết tin tức / <?=$tintucid->id_tin?></h4>
            <div class="clearfix"></div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h5>Tên tin tức</h5>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $tintucid->ten_tin_tuc?>
            </p>
        </div>

        <div class="x_title">

            <div class="clearfix"></div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h5>Tên tóm tắt</h5>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $tintucid->ten_tom_tat?>
            </p>
        </div>

        <div class="x_title">

            <div class="clearfix"></div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h5>Nội dung tóm tắt</h5>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $tintucid->nd_tom_tat?>
            </p>
        </div>

        <div class="x_title">

            <div class="clearfix"></div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h5>Nội dung chi tiết</h5>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $tintucid->noidung_chitiet?>
            </p>
        </div>

        <div class="x_title">

            <div class="clearfix"></div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h5>Ảnh minh họa</h5>
            <img src="" style="width:100px;height:auto">
        </div>

        <div class="x_title">

            <div class="clearfix"></div>

        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h5>Ngày đăng</h5>
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $tintucid->ngay_dang?>
            </p>
        </div>
        <div class="btn" style="float:right;">
            <button type="submit" class="btn btn-success"><a href="<?=site_url('c_quanlytintuc')?>" style="color:#fff;">Quản lý tin tức</a></button>
        </div>
    </div>
</div>