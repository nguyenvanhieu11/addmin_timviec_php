<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý mức giá sản phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <div class="sm-12">
                    <button type="button" class="btn btn-success" style="float:right;"><i class="fa fa-plus"></i><a
                                href="<?= site_url('c_themmucgia'); ?>" style="color: #fff;"> Thêm mức giá</a></button>
                </div>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">Giá đầu (vnd)</th>
                        <th class="column-title">Giá cuối (vnd)</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mucgia as $mg) { ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <?php echo $i++; ?>
                            </td>
                            <td class=" "><?= number_format($mg->gia_bat_dau) ?></td>
                            <td class=" "><?= number_format($mg->gia_ket_thuc) ?></td>
                            <td class=" last">
                                <button type="button" class="btn btn-danger"><a
                                            href="<?= site_url('c_quanlymucgia/delete/' . $mg->id_muc_gia) ?>"
                                            style="color:#fff;">xóa</a></button>
                                <button type="button" class="btn btn-info"><a
                                            href="<?= site_url('c_suamucgia/edit/' . $mg->id_muc_gia) ?>"
                                            style="color:#fff;">sửa</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>