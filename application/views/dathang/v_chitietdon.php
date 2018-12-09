<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Chi tiết đơn đặt hàng</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>STT</th>
                        <th class="column-title">Tên sản phẩm</th>
                        <th class="column-title">Số lượng</th>
                        <th class="column-title">Đơn giá</th>
                        <th class="column-title">Thành Tiền</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ctdon as $ctd) { ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <?= $i++ ?>
                            </td>
                            <td class=" "><?= $ctd->ten_sp ?></td>
                            <td class=" "><?= $ctd->so_luong ?></td>
                            <td class=" "><?= number_format($ctd->gia_ban) ?></td>
                            <td class=" ">
                                <?php

                                    $soluong = $ctd->so_luong;
                                    $dongia = $ctd->gia_ban;
                                    $thanhtien = $soluong * $dongia;
                                    echo number_format($thanhtien);

                                ?>
                                <?php
                                    $tongdon=0;
                                    $tongdon=$tongdon+$thanhtien;
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr class="odd pointer">
                        <td class="a-center ">

                        </td>
                        <td class="a-center ">

                        </td>
                        <td class="a-center ">

                        <td class="a-center ">
                            <h4>Tổng giá trị đơn</h4>
                        </td>
                        <td class=" ">
                            <?php
                                echo "<h4 style='color:#FF0000'>" . number_format($tongdon) . " vnđ </h4>";
                            ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

