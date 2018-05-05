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
//CDebug::dump($arResult);
?>
<?if($arResult["bDescPageNumbering"] === true):?>
	<font class="text">
	<span class="so-trang"><?=$arResult["NavTitle"]?> <?=$arResult["NavPageNomer"]?>/<?=$arResult["NavPageCount"]?></span>&nbsp;
	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>
		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<b><?=$NavRecordGroupPrint?></b>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
		<?else:?>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
		<?endif?>
		<?$arResult["nStartPage"]--?>
	<?endwhile?>
    <span class="truoc-sau">
	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			&nbsp;&nbsp;<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
			|
		<?else:?>
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
				|
			<?else:?>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&nbsp;&nbsp;<?=GetMessage("nav_prev")?></a>
				|
			<?endif?>
		<?endif?>
	<?else:?>
		&nbsp;&nbsp;<?=GetMessage("nav_prev")?>&nbsp;|
	<?endif?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_next")?></a>
	<?else:?>
		<?=GetMessage("nav_next")?>
	<?endif?>
    </span>
<?else:?>
	<font class="text">
	<span class="so-trang"><?=$arResult["NavTitle"]?> <?=$arResult["NavPageNomer"]?>/<?=$arResult["NavPageCount"]?></span>&nbsp;	
	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<b><?=$arResult["nStartPage"]?></b>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
		<?else:?>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
    <span class="truoc-sau">
	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["bSavePage"]):?>
			&nbsp;&nbsp;<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
			|
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 2):?>
				&nbsp;&nbsp;<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
			<?else:?>
				&nbsp;&nbsp;<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
			<?endif?>
			|
		<?endif?>
	<?else:?>
		&nbsp;&nbsp;<?=GetMessage("nav_prev")?>&nbsp;| <!-- prev ko co link -->
	<?endif?>
	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<a class="next-page" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_next")?></a>
	<?else:?>
		<?=GetMessage("nav_next")?> <!-- next ko co link -->
	<?endif?>
    </span>
<?endif?>
</font>