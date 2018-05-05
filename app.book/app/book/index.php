<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Tìm xe giá tốt");
?>
<?
$APPLICATION->IncludeComponent("webcomp:app.booking.car", "step1", array(
    "STEP" => 1,
    "URL_STEP_1" => "/dat-xe/"
),
    false
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>