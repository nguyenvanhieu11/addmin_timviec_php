<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý chi tiết mô tả sản phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <div class="sm-12">
                    <button type="button" class="btn btn-success" style="float:right;"><i class="fa fa-plus"></i><a
                                href="<?=site_url('c_them_chitiet_mt');?>" style="color: #fff;"> Thêm chi tiêt mô tả</a></button>
                </div>
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

                    <tbody>
                        <?php $i=1;?>
                        <?php foreach ($chitietmt as $ctmt){?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                               <?php echo $i++;?>
                            </td>
                            <td class=" "><?=$ctmt->ten_sp?></td>
                            <td class=" "><?=$ctmt->ten_mota?></td>
                            <td class=" "><?=$ctmt->chi_tiet_mt?></td>
                            <td class=" last">
                                <button type="button" class="btn btn-danger">
                                    <a href="<?=site_url('c_chitiet_mota/delete/'.$ctmt->id_chitiet_mt)?>" style="color:#fff;" onclick="return confirm('bạn có chắc chắn muốn xóa chi tiết mô tả này ?')">xóa</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                    <a href="<?=site_url('c_sua_chitiet_mota/edit/'.$ctmt->id_chitiet_mt)?>" style="color:#fff;">sửa</a>
                                </button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                <div class="text-center">
                   <?=$phantrang?>
                </div>
            </div>
        </div>
    </div>
</div>