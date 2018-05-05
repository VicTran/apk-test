<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h2 class="title-bl"><?=$arResult['NAME']?></h2>
<div class="list-news">
	<?foreach($arResult["ITEMS"] as $arItem):
   // $picture = CFile::GetFileArray($arItem['PREVIEW_PICTURE']['ID']);                    
   // $logoResized = CUtilities::resizeImage($picture,287,174);
   $logoResized = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 287, "height" => 174),2);
    
    ?>
    <div class="item">
		<?if($logoResized){?>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="img"><img src="<?=$logoResized['src']?>" alt="<?=$arItem['NAME']?>"/></a>
        <?}?>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="name"><b><?=$arItem['NAME']?></b></a>
		<p class="prev">
			<?=$arItem['PREVIEW_TEXT']?>
		</p>
		<small class="more"><?=$arItem['DISPLAY_DATE_CREATE']?>,  <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">&lt;Xem tiếp&gt;</a> </small>
		<div class="clearfix"></div>
	</div>
    <?endforeach;?>	
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    	<?=$arResult["NAV_STRING"]?>
    <?endif;?>
	
 </div>
<!-- 
<ul class="pagination">
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">12</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>
--!>
	



