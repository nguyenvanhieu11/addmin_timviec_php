<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Đơn đặt hàng của khách hàng</h4>
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
                        <th class="column-title">Người nhận</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Số điện thoại</th>
                        <th class="column-title">Ngày đặt</th>
                        <th class="column-title">Ngày giao</th>
                        <th class="column-title"></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i=1;?>
                    <?php foreach ($giaodich as $gd){?>
                    <tr class="odd pointer">
                        <td class="a-center ">
                           <?=$i++?>
                        </td>
                        <td class=" "><?=$gd->nguoi_nhan?></td>
                        <td class=" "><?=$gd->email?></td>
                        <td class=" "><?=$gd->so_dien_thoai?></td>
                        <td class=" "><?=$gd->ngay_dat?></td>
                        <td class=""><?=$gd->ngay_giao?></td>
                        <td class=" last">
                            <a href="<?=site_url('c_chitietdon/don/'.$gd->id_don_dh)?>">Chi tiết</a>
                        </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>