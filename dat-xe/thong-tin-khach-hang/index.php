<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?>
    <?
    $APPLICATION->IncludeComponent("webcomp:static", "book.step", array(
        "STEP" => 2
    ),
        false
    );
    ?>
    <div class="white_bg box_md">
        <div class="container">
            <div class="row">
                <?
                $APPLICATION->IncludeComponent("webcomp:booking.car", "step2", array(
                    "URL_STEP_1" => "/dat-xe/",
                    "STEP" => 2
                ),
                    false
                );
                ?>

                <?
                $APPLICATION->IncludeComponent("webcomp:static", "trip.info", array(

                ),
                    false
                );
                ?>
                
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>