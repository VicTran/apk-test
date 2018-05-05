            <?
             $previousLevel = 0;
             foreach($arResult as $arItem){
             $previousLevel ++;
             if ($arItem["PERMISSION"] > "D"){
              
            ?>           
            <div class="col-md-4 col-sm-4 col-xs-6">
                <div class="row">
            <a href="<?=$arItem["LINK"]?>" class="btn btn-app btn_app_new">
                <i class="fa fa-<?=$arItem['PARAMS']['ICON']?>" style="font-size: 30px;margin-bottom: 10px;"></i>
                <?=$arItem["TEXT"]?>
              </a>
              </div>
            </div>
            <?}}?>
                    