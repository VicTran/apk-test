<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<!-- Sidebar Menu -->
<ul class="sidebar-menu">       
        <!-- Optionally, you can add icons to the links 45 -->
        <?
        $previousLevel = 0;
        foreach($arResult as $arItem):
        
        ?>
        <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
    		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    	<?endif?>
        <?if ($arItem["IS_PARENT"]):?>
        
            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="<?if ($arItem["SELECTED"]):?>active<?endif?> treeview"><a href="<?=$arItem["LINK"]?>" ><i style="<?if($arItem['PARAMS']['FONT_STYLE']!=''){echo $arItem['PARAMS']['FONT_STYLE'];}else{?> font-size: 18px; <?}?>" class="fa fa-<?=$arItem['PARAMS']['ICON']?>"></i> <span><?=$arItem["TEXT"]?></span></a>
				<ul class="treeview-menu">
            <?else:?>
			<li class="<?if ($arItem["SELECTED"]):?>active<?endif?> treeview"><a href="<?=$arItem["LINK"]?>" ><i style="<?if($arItem['PARAMS']['FONT_STYLE']!=''){echo $arItem['PARAMS']['FONT_STYLE'];}else{?> font-size: 18px; <?}?>"
		    <?endif?>
        
        <?else:?>
            <?if ($arItem["PERMISSION"] > "D"):?>
                <?if ($arItem["DEPTH_LEVEL"] == 1):?>
    				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>" ><i style="<?if($arItem['PARAMS']['FONT_STYLE']!=''){echo $arItem['PARAMS']['FONT_STYLE'];}else{?> font-size: 18px; <?}?>" class="fa fa-<?=$arItem['PARAMS']['ICON']?>"></i> <span><?=$arItem["TEXT"]?></span></a></li>
    			<?else:?>
    				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>" ><i style="<?if($arItem['PARAMS']['FONT_STYLE']!=''){echo $arItem['PARAMS']['FONT_STYLE'];}else{?> font-size: 18px; <?}?>" class="fa fa-<?=$arItem['PARAMS']['ICON']?>"></i> <span><?=$arItem["TEXT"]?></span></a></li>
    			<?endif?>
            <?endif?>
        
        <?endif?>

        <?$previousLevel = $arItem["DEPTH_LEVEL"];?>
               
       <?endforeach?>
       <?if ($previousLevel > 1)://close last item tags?>
    	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?endif?>
      </ul>
<?endif?>
