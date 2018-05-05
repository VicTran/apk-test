<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APKIN | Ứng dụng</title>
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/common.css">
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
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datetimepicker/bootstrap-datetimepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/select2/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/datatables/dataTables.responsive.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="<?=SITE_TEMPLATE_PATH?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
      
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
      <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/baguetteBox.min.css">
      <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/custom.css?v=1.5.6">
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyBDe5fHSzXb_tgo_2l5Y8kO2OY1537-Tuc"></script>
  </head>
<body class="hold-transition skin-blue-light sidebar-collapse sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <!--<a href="/" class="logo">-->
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!--<span class="logo-mini">APK</span>-->
      <!-- logo for regular state and mobile devices -->
      <!--<span class="logo-lg"><b>AN PHÁT KHÁNH</b></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#"  class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <div class="pull-left" style="color: #FFFFFF; text-align: center;padding-top: 10px;font-size: 20px;">

           <b>APKA</b> - <?$APPLICATION->ShowTitle()?>
       </div>
      <?/*$APPLICATION->IncludeComponent(
        "webcomp:menu",
        "apkin.top",
        Array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600000",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
        ),
    false
    );*/?>
        <?$APPLICATION->IncludeComponent("webmin:main.profile", "navbar_right", array(
            "AJAX_MODE" => "N",
            "AJAX_OPTION_SHADOW" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "SET_TITLE" => "N",
            "USER_PROPERTY" => array(
                0 => "UF_ID_GRAB",
            ),
            "SEND_INFO" => "N",
            "CHECK_RIGHTS" => "N",
            "USER_PROPERTY_NAME" => "",
            "AJAX_OPTION_ADDITIONAL" => "",
            "URL_PROFILE" => "/profile/"
        ),
            false
        );?>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     <?$APPLICATION->IncludeComponent("webmin:main.profile", "navbar_left", array(
    	"AJAX_MODE" => "N",
    	"AJAX_OPTION_SHADOW" => "Y",
    	"AJAX_OPTION_JUMP" => "N",
    	"AJAX_OPTION_STYLE" => "Y",
    	"AJAX_OPTION_HISTORY" => "N",
    	"SET_TITLE" => "N",
    	"USER_PROPERTY" => array(
    		0 => "UF_ID_GRAB",
    	),
    	"SEND_INFO" => "N",
    	"CHECK_RIGHTS" => "N",
    	"USER_PROPERTY_NAME" => "",
    	"AJAX_OPTION_ADDITIONAL" => "",
        "URL_PROFILE" => "/profile/"
    	),
    	false
    );?>


     <?$APPLICATION->IncludeComponent(
        "webcomp:menu",
        "apkin",
        Array(
            "ROOT_MENU_TYPE" => "left",
            "MAX_LEVEL" => "2",
            "CHILD_MENU_TYPE" => "sub",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600000",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
        ),
    false
    );?>
      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
 

  

  