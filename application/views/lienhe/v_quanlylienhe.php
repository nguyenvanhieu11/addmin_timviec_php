<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý liên hệ khách hàng</h4>
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
                        <th class="column-title">Người liên hệ</th>
                        <th class="column-title">Số điện thoại</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Nội dung liên hệ</th>
                        <th class="column-title">Ngày liên hệ</th>
                        <th class="column-title">Phản hồi</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i=1;?>
                    <?php foreach ($lienhe as $lh){?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <?=$i++?>
                            </td>
                            <td class=" "><?=$lh->nguoi_lienhe?></td>
                            <td class=" "><?=$lh->so_dien_thoai?></td>
                            <td class=" "><?=$lh->email?></td>
                            <td class=" "><?=$lh->noi_dung_lh?></td>
                            <td class=" "><?=$lh->ngay_lienhe?></td>
                            <td class=" "><?=$lh->phan_hoi?></td>
                            <td class=" last">
                                <button type="button" class="btn btn-danger"><a href="<?=site_url('c_quanlylienhe/delete/'.$lh->id_lien_he)?>" style="color:#fff;" onclick="return confirm('bạn có chắc chắn muốn xóa thông tin liên hệ này ?')">xóa</a></button>
                                <button type="button" class="btn btn-info">
                                    <a href="<?=site_url('c_phanhoilienhe/lienhe/'.$lh->id_lien_he)?>" style="color:#fff;">phản hồi</a></button>
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