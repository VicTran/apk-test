<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>


<?if($arResult["bDescPageNumbering"] === true):?>

	


	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<!--<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_begin")?></a>&nbsp;|&nbsp;
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&laquo;</a>&nbsp;|&nbsp;-->
		<?else:?>
			<!--<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>&nbsp;|&nbsp;-->
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<!--<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">&laquo;</a>&nbsp;|&nbsp;-->
			<?else:?>
				<!--<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&laquo;</a>&nbsp;|&nbsp;-->
			<?endif?>
		<?endif?>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<span class="nav-current-page">&nbsp;<?=$NavRecordGroupPrint?>&nbsp;</span>&nbsp;
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" rel="nofollow"><?=$NavRecordGroupPrint?></a>&nbsp;
		<?else:?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" rel="nofollow"><?=$NavRecordGroupPrint?></a>&nbsp;
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<!--|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&raquo;</a>&nbsp;|&nbsp;
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_end")?></a>&nbsp;--!>
	<?endif?>

<?else:?>

	

	<ul class="pagination">

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
			<!--<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1" rel="nofollow"><?=GetMessage("nav_begin")?></a>&nbsp;|&nbsp;--!>
			<!--<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&laquo;</a>
			&nbsp;|&nbsp;-->
		<?else:?>
			<!--<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>&nbsp;|&nbsp;--!>
			<?if ($arResult["NavPageNomer"] > 2):?>
				<!--<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">&laquo;</a>-->
			<?else:?>
				<!--<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">&laquo;</a>-->
			<?endif?>
			<!--&nbsp;|&nbsp;-->
		<?endif?>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="active"><span class="nav-current-page">&nbsp;<?=$arResult["nStartPage"]?>&nbsp;</span>&nbsp;</li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" rel="nofollow"><?=$arResult["nStartPage"]?></a>&nbsp;</li>
		<?else:?>
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" rel="nofollow"><?=$arResult["nStartPage"]?></a>&nbsp;</li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
	

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<!--|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">&raquo;</a>&nbsp;|&nbsp;
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_end")?></a>&nbsp;-->
	<?endif?>
    </ul>
<?endif?>


