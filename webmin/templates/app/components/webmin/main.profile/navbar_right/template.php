<!-- Navbar Right Menu -->
<?if($arResult["arUser"]["ID"]>0){?>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
  
  <li class="dropdown user user-menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <!-- The user image in the navbar-->
      <img src="<?=SITE_TEMPLATE_PATH?>/images/noavatar.png" class="user-image" alt="User Image">
      <!-- hidden-xs hides the username on small devices so only the image appears. -->
      <span class="hidden-xs"><?=$arResult["arUser"]["NAME"]?></span>
    </a>
    <ul class="dropdown-menu">
      <!-- The user image in the menu -->
      <li class="user-header">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/noavatar.png" class="img-circle" alt="User Image"><p>
          <?=$arResult["arUser"]["NAME"]?>
        </p>
      </li>
      <!-- Menu Body -->          
      <!-- Menu Footer-->
      <li class="user-footer">
        <div>
          <a href="/app.book/?logout=yes" class="btn btn-default btn-flat">ĐĂNG XUẤT</a>
        </div>
      </li>
    </ul>
  </li>
  <!-- Control Sidebar Toggle Button -->
</ul>
</div>
<?}else{?>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="user user-menu">
            <a href="/app.book/">Đăng nhập</a>
        </li>
    </ul>
</div>
<?}?>
<style>
    .navbar-nav>.user-menu>.dropdown-menu>li.user-header{height: auto}
</style>
