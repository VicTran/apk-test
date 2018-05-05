<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

//echo "<pre>"; print_r($arResult);echo "</pre>";

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>
<div class="pagen">
<?if($arResult["bDescPageNumbering"] === true):?>
	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<a bitrix-ajax="true" class="pagen_prev prev-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-left"></i></a>
		<?else:?>			
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<a bitrix-ajax="true" class="pagen_prev prev-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-left"></i></a>
			<?else:?>
				<a bitrix-ajax="true" class="pagen_prev prev-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-left"></i></a>
			<?endif?>
		<?endif?>
	<?else:?>
		<span class="pagen_prev prev-style"><i class="fa fa-angle-left"></i></span>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>

		<?else:?>

		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>
	
	<?if ($arResult["NavPageNomer"] > 1):?>
		<a bitrix-ajax="true" class="pagen_next next-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-right"></i></a>
	<?else:?>
		<span class="pagen_next next-style"><i class="fa fa-angle-right"></i></span>
	<?endif?>
<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>

			<a bitrix-ajax="true" class="pagen_prev prev-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-left"></i></a>
		<?else:?>
	
			<?if ($arResult["NavPageNomer"] > 2):?>
				<a bitrix-ajax="true" class="pagen_prev prev-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><i class="fa fa-angle-left"></i></a>
			<?else:?>
				<a bitrix-ajax="true" class="pagen_prev prev-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><i class="fa fa-angle-left"></i></a>
			<?endif?>
			
		<?endif?>

	<?else:?>
		<span class="pagen_prev prev-style">
			<i class="fa fa-angle-left"></i>
			<!--
			<img src="<?=SITE_TEMPLATE_PATH?>/images/prev.png" alt="prev">
			-->
		</span>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			
		<?else:?>
			
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>

			<a bitrix-ajax="true" class="pagen_next next-style" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><i class="fa fa-angle-right"></i></a>

	<?else:?>
		<span class="pagen_next next-style">
			<i class="fa fa-angle-right"></i>
			<!--<img src="<?=SITE_TEMPLATE_PATH?>/images/next.png" alt="next">-->
		</span>
	<?endif?>
<?endif?>


<?if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
		<li>
			<a bitrix-ajax="true" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("nav_paged")?></a>
		</li>
	<?else:?>
		<li>
			<a bitrix-ajax="true" rel="nofollow" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_all")?></a>
		</li>
	<?endif?>
</noindex>
<?endif?>
</div>