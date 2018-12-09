<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="page-title">
            <div class="title_left">
                <h3>Quản Lý sản phẩm</h3>
            </div>
            <div class="title_right">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right">
                    <form method="post" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" id="myinput" onkeyup="searchKey()" placeholder="Từ khóa của bạn...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="x_content">
            <div class="table-responsive">
                <div class="sm-12">
                    <button type="button" class="btn btn-success" style="float:right;"><i class="fa fa-plus"></i><a
                            href="<?=site_url('c_themsanpham');?>" style="color: #fff;"> Thêm sản phẩm</a></button>
                </div>
                <table class="table table-striped jambo_table bulk_action" id="myTable">
                    <thead>
                    <tr class="headings">
                        <th>
                            STT
                        </th>
                        <th class="column-title">Tên sản phẩm</th>
                        <th class="column-title">Giá bán(vnđ)</th>
                        <th class="column-title">Tình trạng</th>
                        <th class="column-title">Bảo hành(tháng)</th>
                        <th class="column-title">Ảnh sản phẩm</th>
                        <th class="column-title">Lượt xem</th>
                        <th class="column-title">Thao tác</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $i=1?>
                    <?php foreach($product as $pd){?>
                    <tr class="even pointer">
                        <td class="a-center ">
                           <?php echo $i++;?>
                        </td>
                        <td class=" "><?=$pd->ten_sp;?></td>
                        <td class=" "><?=number_format($pd->gia_ban)?></td>
                        <td class=" "><?=$pd->tinh_trang?><i class="success fa fa-long-arrow-up"></i></td>
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
                <div class="text-center">
                   <?=$phantrang?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function searchKey() {
        var keySearch = document.getElementById("myinput");
        var filter = keySearch.value.toUpperCase();
        var table = document.getElementById("myTable");
        var tr = table.getElementsByTagName("tr");
        var i;
        for (i = 0; i < tr.length; i++) {
            var td=tr[i].getElementsByTagName("td")[i];
            if(td){
                if(td.innerHTML.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display="";
                }else{
                    tr[i].style.display="none";
                }
            }
        }
    }
</script>