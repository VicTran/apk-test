

<ul class="timeline" style="padding-top: 10px">
    <?foreach ($arResult["ITEMS"] as $arItem){?>
    <li>

<div class="timeline-item" style="border-bottom: 1px solid #eee;box-shadow: none">
    <h3 class="timeline-header"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a> </h3>

    <div class="timeline-body" >
        <?=$arItem["PREVIEW_TEXT"]?>
    </div>
    <div class="timeline-footer">
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn btn-info btn-xs" style="width: auto;color: #FFFFFF">Xem thêm >></a>
    </div>
</div>
    </li>
    <?}?>

</ul>
<style>
    .timeline:before{display: none}
    .timeline>li>.timeline-item{margin-left: 9px;margin-right: 0px;}
</style>
<style>
    body,html,.content-wrapper{background: #ecf0f5;}
    .content {background: #ecf0f5;}

</style>