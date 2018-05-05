<?
session_start();
$_SESSION["BOOKING"]['STEP'] = 3;
$arError                     = array();
$rsResult['success']         = true;
if ( $_POST["fullname"] == "" || $_POST["phone"] == "") {
    $rsResult['success'] = false;
    $arError[]           = "Vui lòng nhập đầy đủ thông tin";
}

if ( count( $arError ) > 0 ) {
    $rsResult['error_text'] = implode( '<br/>', $arError );
}
if ( $rsResult['success'] ) {
    //Cap nhat lai thong tin khach hang
    $_SESSION["BOOKING"]['CUSTOMER']['PHONE'] = $_POST["phone"];
    $_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME'] = $_POST["fullname"];
    //Cap nhat lai thong tin o doi tac

    if($_SESSION["BOOKING"]['INFO']["DIEU_PHOI_ID"] > 0) {
        // The data to send to the API
        $arUpdateresult = json_decode(file_get_contents('http://doitac.apkin.vn/wsdl/dat-xe/app.set.info.php?dieuPhoiID=' . $_SESSION["BOOKING"]['INFO']["DIEU_PHOI_ID"]."&name=".base64_encode($_SESSION["BOOKING"]['CUSTOMER']['FULL_NAME'])."&action=customer&phone=".base64_encode($_SESSION["BOOKING"]['CUSTOMER']['PHONE']).'&comment='.base64_encode($_POST['comment'])), true);

    }
}


$json = json_encode( $rsResult );
echo $json;
exit();
?>