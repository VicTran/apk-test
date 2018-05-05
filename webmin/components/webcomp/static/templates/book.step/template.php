<?
$arStep = array("1"=>"1. Đặt xe","2"=>"2. Điền thông tin cá nhân","3"=>"3. Hoàn tất");
?>
<div class="white_bg box_md booking_step">
    <div class="container">
        <div class="row"> <div class="col-md-12">
                <table class="progress_bar"> <tbody><tr>
                        <?foreach ($arStep as $step){?>
                        <td <?if($step <= $arParams["STEP"]){?> class="active" <?}?>><?=$step?> </td>
                        <?}?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>