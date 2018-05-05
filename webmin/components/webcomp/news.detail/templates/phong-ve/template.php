
            <div>
                <?
                if(count(array_filter($arResult["PROPERTIES"]["HINH_ANH"]["VALUE"])) > 0){
                ?>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?foreach ($arResult["PROPERTIES"]["HINH_ANH"]["VALUE"] as $k=>$id){?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?=$k?>" class="<?if($k==0){echo 'active';}?>"></li>
                        <?}?>

                    </ol>
                    <div class="carousel-inner">
                        <?foreach ($arResult["PROPERTIES"]["HINH_ANH"]["VALUE"] as $k=>$id){
                            $arFile = CFile::GetFileArray($id);
                            $image_resize = CFile::ResizeImageGet ($arFile, array ( "width" => 900 , "height" => 500));
                    //Cdebug::dump($image_resize);
                        ?>
                        <div style="text-align: center" class="item <?if($k==0){echo 'active';}?>">
                            <img style="display: inline" src="<?=$image_resize['src']?>"
                                 alt="First slide">
                        </div>
                        <?}?>

                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>
                <?}?>
            </div>
            <div class="box box-footer" style="box-shadow: none;border-bottom: 0px">
                <div class="pull-right">
                    <div class="starrr" data-value="<?=$arResult["PROPERTIES"]["DANH_GIA"]["VALUE"]?>" id="star2"></div>

                </div>
                <strong><i class="fa fa-book margin-r-5"></i> <?=$arResult["NAME"]?></strong>
                <p class="text-muted">
                    <i class="fa fa-clock-o"></i> <?=$arResult["PROPERTIES"]["GIO_MO_CUA"]["VALUE"]?>
                </p>
                <p class="text-muted">
                    <i class="fa fa-phone"></i><a href="tel:<?=$arResult["PROPERTIES"]["DIEN_THOAI"]["VALUE"]?>">  <?=$arResult["PROPERTIES"]["DIEN_THOAI"]["VALUE"]?></a>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ :</strong>

                <p class="text-muted"><?=$arResult["PROPERTIES"]["DIA_CHI"]["VALUE"]?></p>

                <hr>

                <strong><i class="fa fa-pencil margin-r-5"></i> Thông tin chi tiết</strong>

                <p>
                    <?=$arResult["~PREVIEW_TEXT"]?>
                </p>
            </div>
