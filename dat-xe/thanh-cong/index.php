<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Furniture Company");
?>
<?
$APPLICATION->IncludeComponent("webcomp:static", "book.step", array(
    "STEP" => 3
),
    false
);
?>

                <?
                $APPLICATION->IncludeComponent("webcomp:booking.car", "step3.success", array(
                    "STEP" => 'final'
                ),
                    false
                );
                ?>
           
<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>