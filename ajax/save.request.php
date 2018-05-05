<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
session_start();
global $TrangThai_DonHang;
global $TrangThai_LaiXe;
if(check_bitrix_sessid()){
	$diemdon      = $_POST['depart_pick'];
	$diemtra      = $_POST['depart_drop'];
	$thoigiandon  = $_POST['depart_time'];
	$giayeucau    = $_POST['price'];
	$sochongoi    = $_POST['seat'];
	$hangxe       = $_POST['type'];
	$soluongkhach = $_POST['chair_seat'];
	$quangduong   = $_POST['quangduong'];
	$toado_di  = $_POST['toado_di'];
	$toado_den = $_POST['toado_den'];

	$hoten     = $_POST['ho_ten'];
	$dienthoai = $_POST['dien_thoai'];
	$email     = $_POST['email'];

	$noidung   = $_POST['noi_dung'];
	$diachitra = $_POST['diachitra'];
	$thanhtoan = $_POST['payment_method_id'];


	//Add vao thong tin chuyen di
	$code = strtoupper( CUtilities::getToken( 8 ) );

	$proChuyenDi["TRANG_THAI"] = $TrangThai_LaiXe["chua_bat_dau"];
	$proChuyenDi[ 'DIA_DIEM_DON' ] = $diemdon;
	$proChuyenDi[ 'DIA_DIEM_TRA' ] = $diemtra;
	$proChuyenDi[ 'THOI_GIAN' ] = $thoigiandon;
	$proChuyenDi[ 'SO_CHO_NGOI' ] = $sochongoi;
	$proChuyenDi[ 'HANG_XE' ] = $hangxe;
	$proChuyenDi[ 'GIA_YEU_CAU' ] = $giayeucau;
	$proChuyenDi[ 'SO_LUONG' ] = $soluongkhach;
	$proChuyenDi[ 'TOA_DO_DIEM_DON' ] = $toado_di;
	$proChuyenDi[ 'TOA_DO_DIEM_TRA' ] = $toado_den;
	$proChuyenDi[ 'KHOANG_CACH' ] = $quangduong;


	$chuyenDiId = CUtilities::add_new_element( IB_THONG_TIN_CHUYEN, $code, $proChuyenDi );

	//Add vao khach hang
	if ( $GLOBALS["USER"]->GetID() > 0 ) {
		$proKhachHang['USER_ID'] = $GLOBALS["USER"]->GetID();
	} else {
		$proKhachHang['USER_ID'] = USER_ID_GUEST;
	}
	$proKhachHang['PHONE']     = $dienthoai;
	$proKhachHang['EMAIL']     = $email;
	$proKhachHang['FULL_NAME'] = $hoten;
	$customerId                = CUtilities::add_new_element( IB_KHACH_HANG, $code, $proKhachHang );

	//Add vao Dat xe
	if ( $chuyenDiId > 0 && $customerId > 0 ) {
		$proDatXe['CHUYEN_ID']     = $chuyenDiId;
		$proDatXe['KHACH_HANG_ID'] = $customerId;
		//$proDatXe['HINH_THUC_TT']  = $_POST['payment_method_id'];
		$proDatXe['TRANG_THAI']    = $TrangThai_DonHang["Confirm"];
		$proDatXe[ 'GHI_CHU' ] = $noidung;
		$proDatXe['DIA_CHI_TRA'] = $diachitra;
		$proDatXe['HINH_THUC_TT'] = $thanhtoan;

		$bookingId = CUtilities::add_new_element( IB_DAT_XE, $code, $proDatXe );

		if ( $bookingId > 0 ) {
			$rsResult['success']    = true;
			$rsResult["Booking_id"] = $bookingId;
		}
	}

}else{
	$rsResult['success'] = false;
	$rsResult['error_text'] = "Hệ thống đang bận vui lòng thử lại sau";

}

$json = json_encode($rsResult);
echo $json;
exit();
?>