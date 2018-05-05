<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
//Thay doi trang thai APK Da xac nhan
global $TrangThai_DonHang;
if($_GET["booking_id"] > 0) {
    CUtilities::set_property_value($_GET["booking_id"], "TRANG_THAI", $TrangThai_DonHang["Confirmed"]);
    $rsResult['success'] = true;
    $json = json_encode($rsResult);
    echo $json;
    exit();
}
?>


