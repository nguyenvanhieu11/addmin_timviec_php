<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Quản lý thành viên SDS</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <div class="sm-12">
                    <button type="button" class="btn btn-success" style="float:right;"><i class="fa fa-plus"></i><a
                                href="<?= site_url('c_themthanhvien'); ?>" style="color: #fff;"> Thêm thành viên</a>
                    </button>
                </div>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">Tên thành viên</th>
                        <th class="column-title">Tên đăng nhập</th>
                        <th class="column-title">Ngày tạo</th>
                        <th class="column-title">Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($thanhvien as $tv) { ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <?= $i++; ?>
                            </td>
                            <td class=" "><?= $tv->ten_addmin ?></td>
                            <td class=" "><?= $tv->user_addmin ?></td>
                            <td class=" "><?= $tv->ngay_tao ?></td>
                            <td class=" last">
                                <?php
                                $a = $tv->id_addmin;
                                if ($a != 1) {
                                    echo "<button type=\"button\" class=\"btn btn-danger\">" .
                                        " <a href=\"c_quanlythanhvien/delete/$tv->id_addmin\"" .
                                        "style=\"color:#fff;\" onclick=\"return confirm('bạn có chắc chắn muốn xóa thành viên này ?')\">xóa</a>" .
                                        "</button>";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
