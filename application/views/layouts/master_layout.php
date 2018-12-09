<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('images/') ?>favicon.ico" type="image/ico"/>
    <title>Gentelella Alela! | </title>
    <link href="<?= base_url('public/vendors/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('public/vendors/') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('public/vendors/') ?>nprogress/nprogress.css" rel="stylesheet">
    <link href="<?= base_url('public/vendors/') ?>iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?= base_url('public/vendors/') ?>bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet">
    <link href="<?= base_url('public/vendors/') ?>jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?= base_url('public/vendors/') ?>bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?= base_url('public/') ?>css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?= site_url('c_giaodich') ?>" class="site_title"><i class="fa fa-paw"></i> <span>Vieclam24h</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= base_url('images/') ?>img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome</span>
                        <h2><?php echo $this->session->userdata('ten_quan_tri'); ?></h2>
                    </div>
                </div>
                <br/>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="<?= site_url('trangchu')?>"><i class="fa fa-home"></i> Trang chủ </a>
                            </li>

							<li><a><i class="fa fa-file-text"></i> Công việc <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a href="<?= site_url('c_giaodich') ?>"> Tất cả công việc </a></li>
									<li><a href="<?= site_url('c_dondathang') ?>">Công việc đã hủy </a></li>
								</ul>
							</li>

                            <li><a><i class="fa fa-user"></i> Thành Viên <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('thanhvien') ?>">Tất cả thành viên </a></li>
                                    <li><a href="<?= site_url('thanhvien') ?>">Thành viên đăng bài </a></li>
                                    <li><a href="<?= site_url('thanhvien') ?>">Thành viên ứng tuyển </a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-edit"></i> Đánh giá & bình luận <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('c_binhluansanpham') ?>">Đánh giá công việc</a>
                                    </li>
                                    <li><a href="<?= site_url('c_quanlybinhluan_tt') ?>">Quản lý bình luận tin tức</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-wechat"></i> Liên hệ <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('c_quanlylienhe') ?>">Quản lý nội dung lh</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-product-hunt"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('c_sanpham'); ?>">Tất cả sản phẩm</a></li>
                                    <li><a href="<?= site_url('c_mota_sanpham') ?>">Mô tả sản phẩm</a></li>
                                    <li><a href="<?= site_url('c_chitiet_mota') ?>">Chi tiết mô tả sản phẩm</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bar-chart-o"></i> Mức giá <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="<?= site_url('c_quanlymucgia') ?>">Quản lý mức giá sản phẩm</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-clone"></i> Loại sản phẩm <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="c_loaisanpham">Quản lý loại sản phẩm</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= site_url('logout') ?>">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="<?= base_url('images/') ?>img.jpg" alt="">
                                <?php echo $this->session->userdata('ten_quan_tri'); ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <?php if ($this->session->userdata('user_addmin') == "root") { ?>
                                    <li><a href="<?= site_url('c_quanlythanhvien') ?>">Quản lý thành viên</a></li>
                                    <li>
                                        <a href="<?= site_url('c_thongtin') ?>">
                                            <span>Cài đặt</span>
                                        </a>
                                    </li>
                                    <li><a href="<?= site_url('logout') ?>"><i class="fa fa-sign-out pull-right"></i>
                                            Đăng xuất</a></li>
                                <?php } else { ?>
                                    <li>
                                        <a href="<?= site_url('c_thongtin') ?>">
                                            <span>Cài đặt</span>
                                        </a>
                                    </li>
                                    <li><a href="<?= site_url('logout') ?>"><i class="fa fa-sign-out pull-right"></i>
                                            Đăng xuất</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main">
            <!-- top tiles -->
            <!-- /top tiles -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?= $connects; ?>
                </div>
            </div>
            <br/>
        </div>
        <footer>
            <div class="pull-right">Phát triển bởi SDS CRM Hieu NV 2017</div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>
<script src="<?= base_url('public/vendors/') ?>jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>fastclick/lib/fastclick.js"></script>
<script src="<?= base_url('public/vendors/') ?>nprogress/nprogress.js"></script>
<script src="<?= base_url('public/vendors/') ?>Chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>gauge.js/dist/gauge.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>iCheck/icheck.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>skycons/skycons.js"></script>
<script src="<?= base_url('public/vendors/') ?>Flot/jquery.flot.js"></script>
<script src="<?= base_url('public/vendors/') ?>Flot/jquery.flot.pie.js"></script>
<script src="<?= base_url('public/vendors/') ?>Flot/jquery.flot.time.js"></script>
<script src="<?= base_url('public/vendors/') ?>Flot/jquery.flot.stack.js"></script>
<script src="<?= base_url('public/vendors/') ?>Flot/jquery.flot.resize.js"></script>
<script src="<?= base_url('public/vendors/') ?>flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= base_url('public/vendors/') ?>flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>flot.curvedlines/curvedLines.js"></script>
<script src="<?= base_url('public/vendors/') ?>DateJS/build/date.js"></script>
<script src="<?= base_url('public/vendors/') ?>jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= base_url('public/vendors/') ?>jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url('public/vendors/') ?>jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="<?= base_url('public/vendors/') ?>moment/min/moment.min.js"></script>
<script src="<?= base_url('public/vendors/') ?>bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('public/') ?>js/custom.min.js"></script>
</body>
</html>
