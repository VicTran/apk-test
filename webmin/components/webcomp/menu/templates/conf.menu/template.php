<?
 $previousLevel = 0;
 foreach($arResult as $arItem){
 $previousLevel ++;
 if ($arItem["PERMISSION"] > "D"){
  
?>    
<a target="_blank" href="<?=$arItem["LINK"]?>" class="btn btn-app">
                <i class="fa fa-<?=$arItem['PARAMS']['ICON']?>"></i> <?=$arItem["TEXT"]?>
              </a>       

<?}}?>
                