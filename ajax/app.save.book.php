<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
session_start();
global $TrangThai_DonHang;
global $TrangThai_LaiXe;
$rsResult['success']    = false;
$_SESSION["BOOKING"]['STEP'] = 2;
$_SESSION["BOOKING"]['INFO']['DIA_DIEM_DON'] = $_POST['pick_up'];
$_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA'] = $_POST['pick_drop'];
$_SESSION["BOOKING"]['INFO']['GIA_CHUAN'] = $_POST['price'];
$_SESSION["BOOKING"]['INFO']['SO_CHO_NGOI'] = $_POST['seat'];
$_SESSION["BOOKING"]['INFO']['THOI_GIAN'] = $_POST['depart_time'];
$_SESSION["BOOKING"]['INFO']['SO_LUONG'] = $_POST['chair_seat'];
$_SESSION["BOOKING"]['INFO']['HANG_XE'] = $_POST['type'];
$_SESSION["BOOKING"]['INFO']['LOAI_XE'] = $_POST['loai_xe'];
$_SESSION["BOOKING"]['INFO']['MAU_XE'] = $_POST['color'];
$_SESSION["BOOKING"]['INFO']['KIEU_XE'] = $_POST['kieu'];
$_SESSION["BOOKING"]['INFO']['TAI_XE_NAME'] = $_POST['tai_xe'];
$_SESSION["BOOKING"]['INFO']['BIEN_SO_XE'] = $_POST['bien_so_xe'];
$_SESSION["BOOKING"]['INFO']['TAI_XE_ID'] = $_POST['tai_xe_id'];
$_SESSION["BOOKING"]['INFO']['XE_ID'] = $_POST['xe_id'];
$_SESSION["BOOKING"]['INFO']["DIEU_PHOI_ID"] = $_POST['dieuPhoiID'];
$_SESSION["BOOKING"]['INFO']["BIDDING_ID"] = $_POST['biddingID'];

$_SESSION["BOOKING"]['CUSTOMER']['PHONE'] = $_POST["customerPhone"];
$_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME'] = $_POST["customerName"];

//Add vao thong tin chuyen di
$code = strtoupper( CUtilities::getToken( 8 ) );
foreach ( $_SESSION["BOOKING"]['INFO'] as $key => $value ) {
    $proChuyenDi[ $key ] = $value;
}
$proChuyenDi["TRANG_THAI"] = $TrangThai_LaiXe["chua_bat_dau"];
$chuyenDiId = CUtilities::add_new_element( IB_THONG_TIN_CHUYEN, $code, $proChuyenDi );

//Add vao khach hang
if ( $GLOBALS["USER"]->GetID() > 0 ) {
    $proKhachHang['USER_ID'] = $GLOBALS["USER"]->GetID();
} else {
    $proKhachHang['USER_ID'] = USER_ID_GUEST;
}
$proKhachHang['PHONE']     = $_SESSION["BOOKING"]['CUSTOMER']['PHONE'];
$proKhachHang['FULL_NAME'] = $_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME'];
$customerId                = CUtilities::add_new_element( IB_KHACH_HANG, $code, $proKhachHang );

//Add vao Dat xe
if ( $chuyenDiId > 0 && $customerId > 0 ) {
    $proDatXe['CHUYEN_ID']     = $chuyenDiId;
    $proDatXe['KHACH_HANG_ID'] = $customerId;
    $proDatXe['HINH_THUC_TT']  = 4;
    $proDatXe['TRANG_THAI']    = $TrangThai_DonHang["Confirm"];
    $bookingId = CUtilities::add_new_element( IB_DAT_XE, $code, $proDatXe );
    if ( $bookingId > 0 ) {
        //unset( $_SESSION["BOOKING"] );
        $_SESSION["BOOKING"]['INFO']['MA_DAT_CHUYEN'] = $code;
        //Cap nhat ma dat chuyen
        $arUpdateresult = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/dat-xe/app.set.info.php?dieuPhoiID=' . $_SESSION["BOOKING"]['INFO']["DIEU_PHOI_ID"].'&action=book&code='.$code.'&winner_id='.$_SESSION["BOOKING"]['INFO']['TAI_XE_ID'].'&bidding_id='.$_SESSION["BOOKING"]['INFO']["BIDDING_ID"]), true);
        $rsResult['success']    = true;

    }
}

//$rsResult['success'] = true;
$json = json_encode($rsResult);
echo $json;
exit();
?>