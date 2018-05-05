<div style="padding: 5px">
        <ul class="nav nav-stacked" >
            <?foreach ($arResult["ITEMS"] as $arItem){
                if(count(array_filter($arItem["PROPERTIES"]["HINH_ANH"]["VALUE"])) > 0) {
                    $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["HINH_ANH"]["VALUE"][0]);
                    $image_resize = CFile::ResizeImageGet($arFile, array("width" => 256, "height" => 256));
                }else{
                    $image_resize["src"] = SITE_TEMPLATE_PATH."/images/gray.jpg";
                }
            ?>
            <li style="background: #FFFFFF;padding: 5px;border-bottom: 1px solid #eee;margin-bottom: 5px;border-radius: 5px">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" style="padding-left: 0px;padding-right: 0px">
                    <div class="pull-right" style="padding-top: 20px">
                        <div class="starrr" data-value="<?=$arItem["PROPERTIES"]["DANH_GIA"]["VALUE"]?>" id="star2"></div>
                    </div>
                    <div class="user-block">
                        <img style="margin-top:10px " class="img-circle img-bordered-sm" src="<?=$image_resize['src']?>"
                             alt="user image">
                        <span class="username" style="color:#3c8dbc "><?=$arItem["NAME"]?></span>
                        <span class="description"><i class="fa fa-map-marker"></i> <?=$arItem["PROPERTIES"]["DIA_CHI"]["VALUE"]?></span>
                        <span class="description"><i class="fa fa-phone"></i> <?=$arItem["PROPERTIES"]["DIEN_THOAI"]["VALUE"]?></span>
                    </div>


                </a>
            </li>
            <?}?>

        </ul>
</div>
<style>
    .nav-stacked li{margin-top: 0px;}
    .nav-stacked li a:hover{background: none}
    .nav-stacked li:hover{background: none}
</style>
<style>
    body,html,.content-wrapper{background: #ecf0f5;}
    .content {background: #ecf0f5;}

</style>
