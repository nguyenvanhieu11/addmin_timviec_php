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

            <form method="post" action="">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Tên thành viên</label>
                        <div class="input-group">
                            <input type="text" id="customerName" class="form-control" id="myinput" placeholder=""
                                   style="width: 120%;">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Email thành viên</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="emailcustomer" placeholder=""
                                   style="width: 120%;">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Số điện thoại thành viên</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="phonecustomer" placeholder=""
                                   style="width: 120%;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>địa chỉ thành viên</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="phonecustomer" placeholder=""
                                   style="width: 120%;">
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="input-group">
                    <button style="margin-left: 10px;" type="button" onclick="getdataSearch()" class="btn btn-success">
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
                <h3>Quản Lý thành viên</h3>
            </div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="myTable">
                    <thead>
                    <tr class="headings">
                        <th>STT</th>
                        <th class="column-title">Tên thành viên</th>
                        <th class="column-title">Email</th>
                        <th class="column-title">Số điện thoại</th>
                        <th class="column-title">Địa chỉ</th>
                        <th class="column-title"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($thanh_vien as $tv) { ?>
                        <tr class="odd pointer" id="result">
                            <td class="a-center ">
                                <?= $i++; ?>
                            </td>
                            <td class=" "><?= $tv->ten_thanh_vien ?></td>
                            <td class=" "><?= $tv->email ?></td>
                            <td class=" "><?= $tv->so_dien_thoai ?></td>
                            <td class=" "><?= $tv->dia_chi ?></td>
                            <td class=" ">
                                <button type="button" class="btn btn-danger">
                                    <a href="<?= site_url('thanhvien/delete/' . $tv->id_thanh_vien) ?>"
                                       style="color:#fff;"
                                       onclick="return confirm('bạn có chắc chắn muốn xóa khách hàng này ?')">xóa</a>
                                </button>
                                <button type="button" class="btn btn-info">
                                    <a href="<?= site_url('c_lichsugiaodich/thanh_vien/' . $tv->id_thanh_vien) ?>"
                                       style="color:#fff;">Bài viết</a></button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <?= $phantrang ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function duyet() {
        alert("hihihi");
    }

    function showfromSearch() {
        var formSearch = $('.search');
        formSearch.show('slow');
    }

    function hideSearch() {
        var formSearch = $('.search');
        formSearch.hide('slow');
    }

    function getdataSearch() {
        var customerName = $('#customerName').val();
        var dateOrder = $('#dateorder').val();

        var form_data = new FormData();
        form_data.append('customerName', customerName);
        form_data.append('dateOrder', dateOrder);

        console.log(form_data);
    }

</script>
