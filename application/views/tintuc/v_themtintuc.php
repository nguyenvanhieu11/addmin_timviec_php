<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Thêm tin tức</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br/>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?=site_url('c_themtintuc/themtintuc')?>">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên tin tức<span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="tentintuc">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tên tóm tắt <span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="tentomtat" required
                               class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung tóm tắt </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="noidungtomtat">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung chi tiết<span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="date-picker form-control col-md-7 col-xs-12" rows="3" required placeholder="Nội dung chi tiết tin tức  ..." name="noidungchitiet"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh minh họa<span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="imasge" class="date-picker form-control col-md-7 col-xs-12" required type="file"
                               accept=".jpg,.png" name="hinhanh">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày đăng<span
                                class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="day" class="date-picker form-control col-md-7 col-xs-12" required type="text"
                               value="<?= date("Y/m/d") ?>" name="ngaydang">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" onclick="addnews()" class="btn btn-success">Thêm tin tức</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    function addnews(){
        var fileImasge = $("#imasge").prop("files")[0];
        var form_data = new FormData();
        form_data.append('file',fileImasge);
        $.ajax({
            type:'POST',
            url:'c_themtintuc/themtintuc',
            data:form_data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                var response = JSON.parse(data.trim());
                if(response['status']==0){
                    alert(response['fileName']);
                }
            }
        });
    }
</script>