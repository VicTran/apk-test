<?
session_start();
$_SESSION["BOOKING"]['STEP'] = 2;
$_SESSION["BOOKING"]['INFO']['DIA_DIEM_DON'] = $_POST['pick_up'];
$_SESSION["BOOKING"]['INFO']['DIA_DIEM_TRA'] = $_POST['pick_drop'];
$_SESSION["BOOKING"]['INFO']['GIA_CHUAN'] = $_POST['price'];
$_SESSION["BOOKING"]['INFO']['GIA_YEU_CAU'] = $_POST['price'];
$_SESSION["BOOKING"]['INFO']['SO_CHO_NGOI'] = $_POST['seat'];
$_SESSION["BOOKING"]['INFO']['THOI_GIAN'] = $_POST['depart_time'];
$_SESSION["BOOKING"]['INFO']['SO_LUONG'] = $_POST['chair_seat'];
$_SESSION["BOOKING"]['INFO']['HANG_XE'] = $_POST['type'];
$_SESSION["BOOKING"]['INFO']['LOAI_XE'] = $_POST['loai_xe'];
$_SESSION["BOOKING"]['INFO']['MAU_XE'] = $_POST['color'];
$_SESSION["BOOKING"]['INFO']['KIEU_XE'] = $_POST['kieu'];
$_SESSION["BOOKING"]['INFO']['TAI_XE_NAME'] = $_POST['tai_xe'];
$_SESSION["BOOKING"]['INFO']['TAI_XE_ID'] = $_POST['tai_xe_id'];
$_SESSION["BOOKING"]['INFO']['XE_ID'] = $_POST['xe_id'];
$_SESSION["BOOKING"]['INFO']['GIA_MOT_KM'] = $_POST['gia_km'];
$_SESSION["BOOKING"]['INFO']['KHOANG_CACH'] = $_POST['khoang_cach'];
$rsResult['success'] = true;
$json = json_encode($rsResult);
echo $json;
exit();
?>