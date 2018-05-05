<?require_once($_SERVER["DOCUMENT_ROOT"]."/webmin/modules/main/include/prolog_before.php");?>
<?
header('Access-Control-Allow-Origin: http://doitac.apkin.vn');
$smsConf = CSMS::getInfoConfig();
$client = new nusoap_client($smsConf['URL_SERVICE'], true);
$client->setCredentials($smsConf['USER'], $smsConf['PASS']);
$User_ID = $_POST["phone"];
$Message = $_POST['message'];
/*$result = $client->call('sendMT',
    array('string' => $User_ID,
        'string0' => base64_encode($Message),
        'string1' => $smsConf['BRAND_NAME'], //'SERVICE_ID: neu BrandName thi dien BrandName vao
        'string2' => $smsConf['BRAND_NAME'], // Command_code: neu BrandName thi dien BrandName vao
        'string3' => 0, //Message_Type
        'string4' => 0,//Receive_ID
        'string5' => 1,//Total_MSG
        'string6' => 1,//Msg_Index
        'string7' => 0,//IsMore
        'string8' => 0)//Content_Type
);*/

//Add to log
/*
$arField['CODE'] = $result;
$arField['PREVIEW_TEXT'] = $Message;
$arProperty['PHAN_LOAI'] = $_TYPE_SMS['normal'];
CUtilities::AddElement(IB_SMS_LOG,$User_ID,$arProperty,$arField);*/

$rsResult['success'] = true;
$json = json_encode($rsResult);
echo $json;
exit();


?>