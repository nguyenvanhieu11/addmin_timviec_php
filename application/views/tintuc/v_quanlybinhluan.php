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
                <form method="post" action="v_dondathang.php">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Tên tin tức</label>
                        <div class="input-group">
                            <input type="text" id="customerName" name="customerName" class="form-control" id="myinput" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>người bình luận</label>
                        <div class="input-group">
                            <input type="text" id="customerName" name="customerName" class="form-control" id="myinput" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Email người bình luận</label>
                        <div class="input-group">
                            <input type="email" id="customerName" name="customerName" class="form-control" id="myinput" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <label>Ngày đăng từ ngày</label>
                        <div class="input-group">
                            <input type="date" name="date" class="form-control" id="dateorder" placeholder="Search for...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="input-group">
                    <button style="margin-left: 10px;" name="searchData" type="submit" onclick="getdataSearch()" class="btn btn-success">
                        Tìm kiếm
                    </button>
                    <button style="margin-left: 10px;" type="button" onclick="hideSearch()" class="btn btn-danger">Hủy
                    </button>
                </div>
            </div>
        </div>
    </div>
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
                    <tr class="even pointer">
                        <?php $i = 1; ?>
                        <?php foreach ($bl_tintuc as $bl) { ?>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <?php echo $i++; ?>
                        </td>
                        <td class=" "><?= $bl->nguoi_binhluan ?></td>
                        <td class=" "><?= $bl->email ?></td>
                        <td class=" "><?= $bl->noidung_binhluan ?></td>
                        <td class=" "><?= $bl->ngaybinh_luan ?></td>
                        <td class=" "><?= $bl->phan_hoi ?></td>
                        <td class=" last">
                            <button type="button" class="btn btn-danger">
                                <a href="<?= site_url('c_binhluan/delete/' . $bl->id_binhluan) ?>" style="color:#fff;" onclick="return confirm('bạn có chắc chắn muốn xóa bình luân này ?')">xóa</a>
                            </button>
                            <button type="button" class="btn btn-info">
                                <a href="<?= site_url('c_phanhoibinhluan/phanhoi/' . $bl->id_binhluan) ?>"
                                   style="color:#fff;">phản hồi</a>
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <?=$phantrang?>
                </div>
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

    function getdataSearch() {
        var customerName = $('#customerName').val();
        var dateOrder = $('#dateorder').val();

        var formData = new FormData();
        formData.append("customerName", customerName);
        formData.append("dateOrder", dateOrder);

        console.log(formData);
        $.ajax({
            url: '',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                var response = JSON.parse();
            }
        });
    }

</script>