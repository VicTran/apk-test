<div style="padding: 5px">
<div class="panel-group" id="accordion">
    <?
    $i=0;
    foreach ($arResult['ITEMS'] as $arItem){
        $i++;
        ?>
        <div class="panel panel-default" style="margin-bottom: 10px">
            <div class="panel-heading" style="background:#f5f5f5;">
                <h4 class="panel-title" style="font-size: 14px">
                    <a data-toggle="collapse" data-parent="#accordion"
                       href="#collapse<?=$i?>" style="color:#3c8dbc;display: block">
                        <?=$i?>. <?=$arItem['NAME']?> </a>
                </h4>
            </div>
            <div id="collapse<?=$i?>" class="panel-collapse collapse ">
                <div class="panel-body" style="font-size: 14px">
                    <?=$arItem['PREVIEW_TEXT']?>

                </div>
            </div>
        </div>
    <?}?>

</div>
</div>
<style>
    body,html,.content-wrapper{background: #ecf0f5;}
    .content {background: #ecf0f5;}

</style>
