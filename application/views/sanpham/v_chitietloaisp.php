<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Sản phẩm theo loại sản phẩm</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">STT</th>
                        <th class="column-title">Tên sản phẩm</th>
                        <th class="column-title">Giá bán</th>
                        <th class="column-title">Tình trạng</th>
                        <th class="column-title">Bảo hành</th>
                        <th class="column-title">Hình ảnh</th>
                        <th class="column-title">Lượt xem</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;?>
                    <?php foreach ($producttype as $pd){?>
                    <tr class="even pointer">
                        <td class=" "><?php echo $i++?></td>
                        <td class=" "><?=$pd->ten_sp?></td>
                        <td class=" "><?=$pd->gia_ban?></td>
                        <td class=" "><?=$pd->tinh_trang?></td>
                        <td class=" "><?=$pd->bao_hanh?></td>
                        <td class=" "><?=$pd->hinh_anh?></td>
                        <td class=" "><?=$pd->luot_xem?></td>
                        <td class=" last">
                            <button type="button" class="btn btn-danger"><a href="<?=site_url('c_sanpham/delete/'.$pd->id_san_pham)?>" style="color:#fff;" onclick="return confirm('bạn có chắc chắn muốn xóa sản phẩm này ?')">xóa</a></button>
                            <button type="button" class="btn btn-info"><a href="<?=site_url('c_suasanpham')?>/edit/<?=$pd->id_san_pham?>" style="color:#fff;">sửa</a></button>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>