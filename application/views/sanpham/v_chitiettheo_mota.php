<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Chi tiết theo mô tả</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">Tên sản phẩm</th>
                        <th class="column-title">Tên mô tả</th>
                        <th class="column-title">Chi tiết mô tả</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>

                    <tbody><?php $i = 1; ?>
                    <?php foreach ($chitietmtid as $ctmtid) { ?>
                        <tr class="even pointer">
                            <td class="a-center ">
                                <?php echo $i++; ?>
                            </td>
                            <td class=" "><?= $ctmtid->ten_sp ?></td>
                            <td class=" "><?= $ctmtid->ten_mota ?></td>
                            <td class=" "><?= $ctmtid->chi_tiet_mt ?></td>
                            <td class=" last">
                                <button type="button" class="btn btn-danger"><a href="<?=site_url('C_chitiet_theo_mota/delete/'.$ctmtid->id_chitiet_mt)?>" style="color:#fff;">xóa</a></button>
                                <button type="button" class="btn btn-info">
                                    <a href="<?=site_url('c_suachitiet_theo_mt') ?>/edit/<?=$ctmtid->id_chitiet_mt?>"
                                       style="color:#fff;">sửa</a>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>