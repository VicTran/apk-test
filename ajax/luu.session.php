<?
session_start();
$rsResult = $_POST['PROPERTY'][$_POST['select']];
$_SESSION["BOOKING"]['STEP'] =2;
$json = json_encode($rsResult);
echo $json;
exit();
?>