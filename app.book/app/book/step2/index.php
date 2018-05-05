<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Tìm xe giá tốt");
?>
<?
$APPLICATION->IncludeComponent("webcomp:app.booking.car", "step2", array(
    "URL_STEP_1" => "/dat-xe/",
    "STEP" => 2
),
    false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>