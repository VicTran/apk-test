<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Tìm xe giá tốt");
?>
<?
$APPLICATION->IncludeComponent("webcomp:app.booking.car", "step3", array(
    "URL_STEP_1" => "/dat-xe/",
    "STEP" => 3
),
    false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>