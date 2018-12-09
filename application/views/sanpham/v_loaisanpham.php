<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý loại sản phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">STT</th>
                        <th class="column-title">Tên loại sản phẩm</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    <?php foreach($protype as $tpd) { ?>
                        <tr class="even pointer">
                            <td class=" "><?php echo $i++?></td>
                            <td class=" "><?= $tpd->ten_loai ?></td>
                            <td class=" last">
                                <a href="<?= site_url('c_chitietloaisp/type/'.$tpd->id_loai_sp);?>">Chi tiết loại sp</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br/>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Thêm loại sản phẩm
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br/>
            <p class="text-center"><?= $this->session->message ?></p>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên loại sản phẩm <span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" name="typeproduct" required
                               class="form-control col-md-7 col-xs-12">
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
