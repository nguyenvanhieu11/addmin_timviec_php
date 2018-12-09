<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý bình luận tin tức</h4>
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

                        <th class="column-title">Người bình luận</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Nội dung bình luận</th>
                        <th class="column-title">Ngày bình luận</th>
                        <th class="column-title">Phản hồi</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i=1;?>
                    <?php foreach ($bl_tintuc as $bl) { ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                               <?php echo $i++;?>
                            </td>
                            <td class=" "><?=$bl->nguoi_binhluan?></td>
                            <td class=" "><?=$bl->email?></td>
                            <td class=" "><?=$bl->noidung_binhluan?></td>
                            <td class=" "><?=$bl->ngaybinh_luan?></td>
                            <td class=" "><?=$bl->phan_hoi?></td>
                            <td class=" last">
                                <button type="button" class="btn btn-danger">
                                    <a href="<?=site_url('c_binhluan/delete/'.$bl->id_binhluan)?>" style="color:#fff;" onclick="return confirm('bạn có chắc chắn muốn xóa bình luận này ?')">xóa</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                    <a href="<?=site_url('c_phanhoibinhluan/phanhoi/'.$bl->id_binhluan)?>" style="color:#fff;">phản hồi</a>
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