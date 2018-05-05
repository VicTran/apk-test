<?
class CCustomers{
    function getListCustomer($arrFilter=array()){
        $arSelect = Array("ID", "IBLOCK_ID", "DATE_CREATE", "NAME", "PROPERTY_*");
        $arFilter["IBLOCK_ID"] = IB_KHACH_HANG;
        if(!is_array($arrFilter)){
            $arrFilter = array();
        }
        $resBooking = CIBlockElement::GetList(array("DATE_CREATE" => "DESC"),
            array_merge($arFilter,$arrFilter), false, false,$arSelect);

        while ($ob = $resBooking->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arFields['PROPERTIES'] = $ob->GetProperties();
            $arResult[$arFields["ID"]] = $arFields;
        }
        return $arResult;
    }
}
?>