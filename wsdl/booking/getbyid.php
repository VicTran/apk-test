<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
header('Access-Control-Allow-Origin: http://doitac.apkin.vn');
$rsResult = CBooking::getInfoBookingByID($_REQUEST["booking_id"]);
$rsResult["trang_thai_lai_xe"] = CBooking::getTrangThaiLaiXe_Enum();

$rsResult['success'] = true;
$json = json_encode($rsResult);
echo $json;
exit();

?>
