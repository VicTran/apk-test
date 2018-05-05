<?
session_start();
$_SESSION["BOOKING"]['STEP'] = 3;
$arError                     = array();
$rsResult['success']         = true;
if ( $_POST["fullname"] == "" || $_POST["phone"] == "" || $_POST['address'] == "" ) {
	$rsResult['success'] = false;
	$arError[]           = "Vui lòng nhập đầy đủ thông tin";
}

/*validate: đăng ký tài khoản*/
if ( $_POST['khtx'] == 1 ) {
	if ( $_POST['username'] == '' || $_POST['password'] == '' || $_POST['password_confirm'] == '' || $_POST['email'] == '' ) {
		if ( $_POST['email'] == '' ) {
			$arError[] = "Vui lòng nhập Email để đăng ký tài khoản";
		} elseif ( count( $arError ) == 0 ) {
			$arError[] = "Vui lòng nhập đầy đủ thông tin";
		}
		$rsResult['success'] = false;
	} else {
		if ( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
			$rsResult['success'] = false;
			$arError[]           = 'Định dạng email không đúng';
		} else {
			/*
			$filter  = Array
			(
				"EMAIL" => $_POST['email'],
			);
			$rsUsers = CUser::GetList( null, ( $order = "desc" ), $filter ); // select users
			$rsUsers->NavStart(1);
			if ( $rsUsers->NavNext( true, "f_" ) ) {
				$rsResult['success'] = false;
				$arError[]           = 'Email bạn nhập đã được dùng để đăng ký tài khoản, vui lòng đổi email khác';
			}
			*/
		}
		if ( strlen( $_POST['username'] ) < 3 || ! preg_match( '/^[a-z0-9-]+$/', $_POST['username'] ) ) {
			$rsResult['success'] = false;
			$arError[]           = 'Tên tài khoản phải > 3 ký tự và chỉ chứa các chữ cái a-z và số 0-9';
		}
		if ( strlen( $_POST['password'] ) < 6 ) {
			$rsResult['success'] = false;
			$arError[]           = 'Mật khẩu phải lớn hơn 6 ký tự';
		} elseif ( $_POST['password'] != $_POST['password_confirm'] ) {
			$rsResult['success'] = false;
			$arError[]           = 'Nhập lại mật khẩu không đúng';
		}
	}

}
if ( count( $arError ) > 0 ) {
	$rsResult['error_text'] = implode( '<br/>', $arError );
}
if ( $rsResult['success'] ) {
	$_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME']          = $_POST['fullname'];
	$_SESSION["BOOKING"]['CUSTOMER']['PHONE']              = $_POST['phone'];
	$_SESSION["BOOKING"]['CUSTOMER']['EMAIL']              = $_POST['email'];
	$_SESSION["BOOKING"]['CUSTOMER']['DIA_CHI_TRA']        = $_POST['address'];
	$_SESSION["BOOKING"]['CUSTOMER']['GHI_CHU']            = $_POST['comment'];
	$_SESSION["BOOKING"]['CUSTOMER']['DANG_KY_THANH_VIEN'] = $_POST['khtx'];

	$_SESSION["BOOKING"]['CUSTOMER']['USERNAME']        = $_POST['username'];
	$_SESSION["BOOKING"]['CUSTOMER']['PASSWORD']            = $_POST['password'];
	$_SESSION["BOOKING"]['CUSTOMER']['PASSWORD_CONFIRM'] = $_POST['password_confirm'];
}


$json = json_encode( $rsResult );
echo $json;
exit();
?>