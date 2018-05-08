<?
session_start();
$_SESSION["BOOKING"]['STEP'] = 3;
$rsResult['success']         = true;
/*validate: đăng ký tài khoản*/
$json = json_encode( $rsResult );
echo $json;
exit();
?>