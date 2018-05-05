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
<ul class="list-unstyled pagen">
	<?if($arResult["NavTitle"]){?><li><?=$arResult["NavTitle"]?></li><?}?>
<?if($arResult["bDescPageNumbering"] === true):?>
	<!-- 1-6 của 7
	<?=$arResult["NavFirstRecordShow"]?> <?=GetMessage("nav_to")?> <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?><br />
	-->

	<!-- next prev
	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_begin")?></a>
			</li>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
			</li>
			
		<?else:?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>
			</li>
			
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<li>
					<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
				</li>
			<?else:?>
				<li>
					<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
				</li>
			<?endif?>
		<?endif?>
	<?else:?>
		<li><span><?=GetMessage("nav_begin")?></span></li>
		<li><span><?=GetMessage("nav_prev")?></span></li>
	<?endif?>
	-->

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li><b><?=$NavRecordGroupPrint?></b></li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
			</li>
		<?else:?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
			</li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>
	
	<!-- next prev
	<?if ($arResult["NavPageNomer"] > 1):?>
		<li>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_next")?></a>
		</li>
		<li>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_end")?></a>
		</li>
	<?else:?>
		<li><span><?=GetMessage("nav_next")?></span></li>
		<li><span><?=GetMessage("nav_end")?></span></li>
	<?endif?>
	-->
<?else:?>
	<!-- 1-6 của 7
	<?=$arResult["NavFirstRecordShow"]?> <?=GetMessage("nav_to")?> <?=$arResult["NavLastRecordShow"]?> <?=GetMessage("nav_of")?> <?=$arResult["NavRecordCount"]?><br />
	-->

	<!-- next prev
	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_begin")?></a>
			</li>
			
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
			</li>
			
		<?else:?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>
			</li>
			
			<?if ($arResult["NavPageNomer"] > 2):?>
				<li>
					<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
				</li>
			<?else:?>
				<li>
					<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
				</li>
			<?endif?>
			
		<?endif?>

	<?else:?>
		<li><span><?=GetMessage("nav_begin")?></span></li>
		<li><span><?=GetMessage("nav_prev")?></span></li>
	<?endif?>
	-->

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li>
				<b><?=$arResult["nStartPage"]?></b>
			</li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
			</li>
		<?else:?>
			<li>
				<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
			</li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
	
	<!-- next prev
	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<li>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_next")?></a>
		</li>
		<li>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_end")?></a>
		</li>
	<?else:?>
		<li><span><?=GetMessage("nav_next")?></span></li>
		<li><span><?=GetMessage("nav_end")?></span></li>
	<?endif?>
	-->
<?endif?>


<?if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
		<li>
			<a rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("nav_paged")?></a>
		</li>
	<?else:?>
		<li>
			<a rel="nofollow" rel="nofollow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_all")?></a>
		</li>
	<?endif?>
</noindex>
<?endif?>
</ul>
<!--
<style type="text/css" media="screen">
ul.pagen{}
ul.pagen li{display: inline-block;font-weight: bold;}
ul.pagen li,
ul.pagen li a{color: #000;}
ul.pagen li span,
ul.pagen li a,
ul.pagen li b{padding: 1px 5px 3px;}
ul.pagen li b{
    background-color: #ef2300;
    color: #fff;
}	
</style>
-->