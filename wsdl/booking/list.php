<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
header('Access-Control-Allow-Origin: http://doitac.apkin.vn');
$rsResult["LIST_BOOKING"] = CBooking::getListBooking();
//Get Thong tin khach hang tu code dat
$rsResult["LIST_CUSTOMER"] = CBooking::getListCustomer(array("NAME"=>array_keys($rsResult["LIST_BOOKING"])));
//Get Thong tin chuyen tu code dat
$rsResult["LIST_TRIP"] = CBooking::getListTrip(array("NAME"=>array_keys($rsResult["LIST_BOOKING"])));

$rsResult['success'] = true;
$json = json_encode($rsResult);
echo $json;
exit();

?>
