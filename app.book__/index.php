<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?> 

<title>Hello</title>
 
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo hidden" >
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that
                                            may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=SITE_TEMPLATE_PATH?>/master/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="caidat.html"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">APKA Tìm xe giá</li>
                <li>
                    <a href="vitaikhoan.html">
                        <i class="fa fa-money"></i> <span>Ví tài khoản</span>
                        <span class="pull-right-container" hidden>
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="danhba.html">
                        <i class="fa fa-address-book"></i> <span>Danh ba phong ve</span>
                        <span class="pull-right-container" hidden>
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="tinkhuyenmai.html">
                        <i class="fa fa-bullhorn"></i> <span>Tin khuyen mai</span>
                        <span class="pull-right-container" hidden>
                            <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="lichsu.html">
                        <i class="fa fa-history"></i> <span>Lịch sử chuyến đi</span>
                    </a>
                </li>
                <li>
                    <a href="chuyendimienphi.html">
                        <i class="fa fa-gift"></i> <span>Chuyến đi miên phí</span>
                    </a>
                </li>
                <li>
                    <a href="trogiup.html">
                        <i class="fa fa-book"></i> <span>Trợ giúp</span>
                    </a>
                </li>
                <li>
                    <a href="caidat.html">
                        <i class="fa fa-cog"></i> <span>Cài đặt</span>
                    </a>
                </li>
                <li>
                    <a href="phaply.html">
                        <i class="fa fa-user-secret"></i> <span>Phap ly</span>
                    </a>
                </li>
                <li class="header">LABELS</li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content" style="background-image:url('<?=SITE_TEMPLATE_PATH?>/master/1.png'); min-height: 500px;">
            <!-- Small boxes (Stat box) -->
            <div class="row" style="">
                <div class="col-lg-12 col-xs-12" style="padding-top: 170px;">
                    <!-- small box -->
                    <a href="nhapdiadiem.html" class="btn btn-block btn-social btn-dropbox">
                        <i class="fa fa-dropbox"></i> Nhập điểm bạn cần đến
                    </a>
                </div>
            </div>
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>

<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>