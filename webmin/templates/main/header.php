<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Di That Thich</title>
    <?$APPLICATION->ShowHead();?>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datetimepicker/bootstrap-datetimepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/select2/select2.min.css">
    <!-- DataTables -->

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.responsive.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/custom.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBDe5fHSzXb_tgo_2l5Y8kO2OY1537-Tuc"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i" rel="stylesheet">
</head>

<body class="hold-transition skin-blue  layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <img style="height: 70px" src="<?=SITE_TEMPLATE_PATH?>/images/logo-vietgo.png">
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/"><i class="fa fa-home"></i>&nbsp;&nbsp; Trang chủ</a></li>
                        <li><a href="/dat-xe/"><i class="fa fa-search"></i>&nbsp;&nbsp; Tìm xe</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;
                                <?if($GLOBALS["USER"]->GetID()>0){?><?=$GLOBALS["USER"]->GetFullName()?><?}else{?>Tài khoản<?}?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?if($GLOBALS["USER"]->GetID()>0){?>
                                    <li><a href="/tai-khoan/quan-ly-chuyen/"><i class="fa fa-plus"></i>Các xe đã đặt</a></li>
                                    <li><a href="/?logout=yes"><i class="fa fa-plus"></i>Đăng xuất</a></li>
                                <?}else{?>
                                <li><a href="/tai-khoan/register.php"><i class="fa fa-plus"></i>Đăng ký</a></li>
                                <li><a href="/tai-khoan/"><i class="fa fa-plus"></i>Đăng nhập</a></li>
                                <?}?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
