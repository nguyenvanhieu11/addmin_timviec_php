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
            <h4>Quản lý tin tức</h4>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <div class="sm-12">
                    <button type="button" class="btn btn-success" style="float:right;"><i class="fa fa-plus"></i><a
                            href="<?=site_url('c_themtintuc');?>" style="color: #fff;"> Thêm tin tức</a></button>
                </div>
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">Tên tin tức</th>
                        <th class="column-title">Ngày đăng</th>
                        <th class="column-title">Hình ảnh</th>
                        <th class="column-title">Bình luận</th>
                        <th class="column-title text-center"><i class="fa fa-gears"></i> Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i=1;?>
                    <?php foreach ($binhluantintuc as $tt){?>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <?=$i++?>
                        </td>
                        <td class=" "><?=$tt->ten_tin_tuc?></td>
                        <td class=" ">
                           <?=$tt->ngay_dang?>
                        </td>
                        <td class=" "><?=$tt->anh_minh_hoa?></td>
                        <td class=" ">
                            <a href="<?=site_url('c_binhluan/tin/'.$tt->id_tin)?>" class="btn btn-app">
                                <span class="badge bg-orange"><?=$tt->soluong_bl;?></span>
                                <i class="fa fa-envelope"></i> comment
                            </a>
                        </td>
                        <td class=" last text-center">
                            <button type="button" class="btn btn-danger">
                                <a href="<?=site_url('c_quanlytintuc/delete/')?><?=$tt->id_tin?>" style="color:#fff;" onclick="return confirm('bạn có chắc chắn muốn xóa tin tức này ?')">xóa</a>
                            </button>
                            <button type="button" class="btn btn-info"><a href="<?=site_url('c_suatintuc/suatintuc/'.$tt->id_tin)?>" style="color:#fff;">sửa</a></button>
                            <button type="button" class="btn btn-success">
                                <a href="<?=site_url('c_chitiet_tintuc/tintuc/')?><?=$tt->id_tin?>" style="color:#fff;">chi tiết</a>
                            </button>
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