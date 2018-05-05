<?
class CSMS {
    function getInfoConfig(){
        $arConfig['URL_SERVICE'] = 'http://sms.8x77.vn:8077/mt-services/MTService?wsdl';
        $arConfig['USER'] = 'anphatkhanh';
        $arConfig['PASS'] = 'anphatkhanh@2017';
        $arConfig['BRAND_NAME'] = 'ANPHATKHANH';
        return $arConfig;
    }

    function getLog($arrFilter=array()){
        $arFilter['IBLOCK_ID'] = IB_SMS_LOG;
        $arFilter['ACTIVE'] = "Y";
        $arSelect = array("ID","NAME","IBLOCK_ID","PROPERTY_*");
        $rsElement = CIBlockElement::GetList(array(),array_merge($arFilter,$arrFilter) , false, false, $arSelect);
        while($obElement = $rsElement->GetNextElement())
        {

            $arItem = $obElement->GetFields();
            $arItem["PROPERTIES"] = $obElement->GetProperties();
            $arResult[] = $arItem;
        }
        return $arResult;
    }

    function getTemplate($arrFilter=array()){
        $arFilter['IBLOCK_ID'] = IB_SMS_TEMPLATE;
        $arFilter['ACTIVE'] = "Y";
        $arSelect = array("ID","NAME","IBLOCK_ID","CODE","PREVIEW_TEXT");
        $rsElement = CIBlockElement::GetList(array(),array_merge($arFilter,$arrFilter) , false, false, $arSelect);
        while($obElement = $rsElement->GetNextElement())
        {
            $arItem = $obElement->GetFields();
            $arResult[$arItem['CODE']] = $arItem;
        }
        return $arResult;

    }

}
?>