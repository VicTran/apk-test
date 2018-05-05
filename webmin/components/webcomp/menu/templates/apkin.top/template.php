<ul class="apkin_top">
    <?
     $previousLevel = 0;
     foreach($arResult as $arItem):
     $previousLevel ++;
     if ($arItem["PERMISSION"] > "D"){
      
    ?>
    <li><a class="<?if ($arItem["SELECTED"]):?>active<?endif?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    <?if($previousLevel<$total){?>
    <span style="color: #fff;font-size: 14px;">|</span>
    <?}?>
    </li>
    <?}?>
    <?endforeach?>
</ul>
<style>
.apkin_top li:last-child span{display: none;}
</style>