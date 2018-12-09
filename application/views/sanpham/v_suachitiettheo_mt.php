<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>sửa thông tin chi tiết theo mô tả sản phẩm
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br/>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"
                  action="<?=site_url('c_suachitiet_theo_mt/edit/'.$chitietid->id_chitiet_mt)?>">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Chi tiết mô tả<span
                            class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12"
                               name="chitiet" value="<?=$chitietid->chi_tiet_mt?>">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Hoàn thành</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>