<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Thêm sản phẩm
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br/>
            <form method="post" class="form-horizontal form-label-left"
                  action="<?= site_url('c_themsanpham') ?>/add">
<!--                --><?php //echo form_open_multipart(site_url('c_themsanpham/add'));?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại sản phẩm <span
                                class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" required name="loaisp">
                            <option>--- Loại sản phẩm ---</option>
                            <?php foreach ($loaisanpham as $loai) { ?>
                                <option value="<?= $loai->id_loai_sp ?>"><?= $loai->ten_loai ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên sản phẩm <span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12"
                               name="tensp">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Giá bán <span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="giaban" required
                               class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tình trạng sản
                        phẩm </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="tinhtrang">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Bảo hành <span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required type="text"
                               name="baohanh">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh sản phẩm <span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="date-picker form-control col-md-7 col-xs-12" required type="file"
                               accept=".jpg,.png" name="fileimg">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>