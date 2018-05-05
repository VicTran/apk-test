<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
header('Access-Control-Allow-Origin: http://doitac.apkin.vn');
if($_REQUEST["kh_id"]!=""){
    $arId = explode(",",$_REQUEST["kh_id"]);
}
if(count($arId) > 0){
    $arFilter = array("ID"=>$arId);
}else{
    $arFilter = array();
}
$rsResult = CCustomers::getListCustomer($arFilter);

$rsResult['success'] = true;
$json = json_encode($rsResult);
echo $json;
exit();

?>
