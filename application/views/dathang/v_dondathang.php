<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph">
        <div class="row x_title formSrearch" onclick="showfromSearch()">
            <div class="col-md-6">
                <h3>Tìm kiếm</h3>
            </div>
            <div class="col-md-6">
                <div id="reportrange" class="pull-right"
                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
            </div>
        </div>
        <div class="search" hidden>
            <div class="row">
                <form method="post" action="<?=site_url('C_dondathang/searchAjax')?>">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Tên khách hàng</label>
                        <div class="input-group">
                            <input type="text" id="customerName" name="customerName" class="form-control" id="myinput"
                                   placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Khách hàng đặt từ ngày</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <input type="date" class="form-control" id="startTime" name="startTime">
                            <div class="input-group-addon">đến</div>
                            <input type="date" class="form-control" id="endTim" name="endTime">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="input-group">
                    <button style="margin-left: 10px;" name="searchData" type="submit" onclick="getdataSearch()"
                            class="btn btn-success">
                        Tìm kiếm
                    </button>
                    <button style="margin-left: 10px;" type="button" onclick="hideSearch()" class="btn btn-danger">Hủy
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="page-title">
            <div class="title_left">
                <h3>Quản lý đơn đặt hàng</h3>
            </div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="myTable">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">Khách hàng</th>
                        <th class="column-title">Người nhận</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Số điện thoại</th>
                        <th class="column-title">Ngày đặt</th>
                        <th class="column-title">Ngày giao</th>
                        <th class="column-title">Duyệt</th>
                        <th class="column-title"></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dondathang as $ddh) { ?>
                        <tr class="odd pointer">
                            <td class="a-center ">
                                <?= $i++ ?>
                            </td>
                            <td class=" "><?= $ddh->tenkhach_hang ?></td>
                            <td class=" "><?= $ddh->nguoi_nhan ?></td>
                            <td class=" "><?= $ddh->email ?></td>
                            <td class=" "><?= $ddh->so_dien_thoai ?></td>
                            <td class=" "><?= $ddh->ngay_dat ?></td>
                            <td class=""><?= $ddh->ngay_giao ?></td>
                            <td class="last">
                                <input type="checkbox" class="flat"
                                       onclick="checked(<?= $ddh->id_don_dh ?>)" <?php if ($ddh->trang_thai_don == 1) { ?> checked <?php } ?>/>
                                <input type="text" name="check" id="check" value="" hidden/>
                            </td>
                            <td class=" last">
                                <a href="<?= site_url('c_chitietdon/don/' . $ddh->id_don_dh) ?>">Chi tiết</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <div class="btn-group" style="margin:0px auto;">
                    <?php echo $phantrang ?>
                </div>

            </div>
            <div class="checkUpdate">
                <form method="post" action="" style="float: right">
                    <div class="">
                        <input type="text" value="" hidden>
                        <button type="submit" class="btn btn-danger">Cập nhật đơn đặt hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function showfromSearch() {
        var formSearch = $('.search');
        formSearch.show('slow');
    }

    function hideSearch() {
        var formSearch = $('.search');
        formSearch.hide('slow');
        $('#customerName').val("");
        $('#dateorder').val("");
    }

    // function getdataSearch() {
    //     var customerName = $('#customerName').val();
    //     var dateOrder = $('#dateorder').val();
    //
    //     var formData = new FormData();
    //     formData.append("customerName", customerName);
    //     formData.append("dateOrder", dateOrder);
    //
    //     console.log(formData);
    //     $.ajax({
    //         url: 'c_dondathang/searchAjax',
    //         type: 'POST',
    //         data: formData,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (data) {
    //             var response = JSON.parse();
    //         }
    //     });
    // }
</script>
<script type="text/javascript">

    function checked(id_don) {
        alert("hihihi");
    }
</script>