<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Nội dung bình luận tin tức</h4>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $binhluan->noidung_binhluan ?>
            </p>
        </div>
        <form action="<?=site_url('c_phanhoibinhluan/phanhoi/'.$binhluan->id_binhluan)?>" method="post">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_title">
                    <h4>Phản hồi</h4>
                    <div class="clearfix"></div>
                </div>
                <textarea class="form-control" rows="3" placeholder="Nội dung phản hồi..." name="ndphanhoi"></textarea>
            </div>
            <div class="btn" style="float:right;">
                <button type="submit" class="btn btn-success">Gửi phản hồi</button>
            </div>
        </form>
    </div>
</div>