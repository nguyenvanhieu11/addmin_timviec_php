<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý mô tả sản phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <div class="sm-12">
                    <button type="button" class="btn btn-success" style="float:right;"><i class="fa fa-plus"></i><a
                            href="<?=site_url('c_them_mota_sanpham');?>" style="color: #fff;"> Thêm mô tả</a></button>
                </div>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">ID mô tả</th>
                        <th class="column-title">Tên mô tả</th>
                        <th class="column-title">Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i=1;?>
                   <?php foreach($mota as $mt){?>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <?php echo $i++;?>
                        </td>
                        <td class=" "><?=$mt->id_mota?></td>
                        </td>
                        <td class=" "><?=$mt->ten_mota?></td>
                        <td class=" last">
                            <button type="button" class="btn btn-info"><a href="<?=site_url('c_suamota')?>/edit/<?=$mt->id_mota?>" style="color:#fff;">sửa</a></button>
                            <button type="button" class="btn btn-success"><a href="<?=site_url('c_chitiet_theo_mota')?>/mota/<?=$mt->id_mota?>" style="color:#fff;">chi tiết theo mô tả</a></button>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>