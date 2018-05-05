 <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/noavatar.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <?if($arResult["arUser"]["ID"] > 0){?>
      <p><?=$arResult["arUser"]["NAME"]?></p>
      <?}else{?>
      <p>Khách APK</p>
      <?}?>

    </div>
  </div>