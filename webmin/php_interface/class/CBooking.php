<?
class CBooking{
    function getInfoBookingByID($bookingID=0){
        if($bookingID > 0){
            $arSelect = Array("ID", "IBLOCK_ID", "DATE_CREATE", "NAME", "PROPERTY_*");
            $resBooking = CIBlockElement::GetList(array("DATE_CREATE" => "DESC"),
                array("ID"=>$bookingID,
                "IBLOCK_ID"=>IB_DAT_XE), false, false,$arSelect);

            if ($ob = $resBooking->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arFields['PROPERTIES'] = $ob->GetProperties();

                $arResult["BOOKING_INFO"]["INFO"]["DIA_CHI_TRA"] = $arFields['PROPERTIES']["DIA_CHI_TRA"]["VALUE"];
                $arResult["BOOKING_INFO"]["INFO"]["GHI_CHU"] = $arFields['PROPERTIES']["GHI_CHU"]["VALUE"];
                $arResult["BOOKING_INFO"]["INFO"]["NGAY_DAT"] = $arFields['DATE_CREATE'];
                $arResult["BOOKING_INFO"]["INFO"]["HINH_THUC_TT"]["NAME"] = $arFields['PROPERTIES']["HINH_THUC_TT"]["VALUE"];
                $arResult["BOOKING_INFO"]["INFO"]["MA_VE"] = $arFields['NAME'];
                $arResult["BOOKING_INFO"]["INFO"]["ID"] = $arFields['ID'];
                $arResult["BOOKING_INFO"]["INFO"]["TRANG_THAI"] = $arFields['PROPERTIES']["TRANG_THAI"]["VALUE"];
                //Khach hang ID
                if($arFields['PROPERTIES']["KHACH_HANG_ID"]["VALUE"] > 0){
                    $resCustomer = CIBlockElement::GetList(array("DATE_CREATE" => "DESC"),
                        array("ID"=>$arFields['PROPERTIES']["KHACH_HANG_ID"]["VALUE"],
                            "IBLOCK_ID"=>IB_KHACH_HANG), false, false,$arSelect);
                    if($obCustomer = $resCustomer->GetNextElement() ){
                        $arFieldsCustomer = $obCustomer->GetFields();
                        $arFieldsCustomer['PROPERTIES'] = $obCustomer->GetProperties();
                        $arResult["BOOKING_INFO"]["CUSTOMER"]["ID"] = $arFieldsCustomer['ID'];
                        $arResult["BOOKING_INFO"]["CUSTOMER"]["FULL_NAME"] = $arFieldsCustomer['PROPERTIES']["FULL_NAME"]["VALUE"];
                        $arResult["BOOKING_INFO"]["CUSTOMER"]["PHONE"] = $arFieldsCustomer['PROPERTIES']["PHONE"]["VALUE"];
                        $arResult["BOOKING_INFO"]["CUSTOMER"]["EMAIL"] = $arFieldsCustomer['PROPERTIES']["EMAIL"]["VALUE"];
                    }
                }
                //Thong tin chuyen di
                if($arFields['PROPERTIES']["CHUYEN_ID"]["VALUE"] > 0){
                    $resChuyenDi = CIBlockElement::GetList(array("DATE_CREATE" => "DESC"),
                        array("ID"=>$arFields['PROPERTIES']["CHUYEN_ID"]["VALUE"],
                            "IBLOCK_ID"=>IB_THONG_TIN_CHUYEN), false, false,$arSelect);
                    if($obChuyenDi = $resChuyenDi->GetNextElement() ){
                        $arFieldsChuyenDi = $obChuyenDi->GetFields();
                        $arFieldsChuyenDi['PROPERTIES'] = $obChuyenDi->GetProperties();
                        $arResult["BOOKING_INFO"]["BOOKING"]["DIA_DIEM_DON"] = $arFieldsChuyenDi['PROPERTIES']["DIA_DIEM_DON"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["DIA_DIEM_TRA"] = $arFieldsChuyenDi['PROPERTIES']["DIA_DIEM_TRA"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["THOI_GIAN"] = $arFieldsChuyenDi['PROPERTIES']["THOI_GIAN"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["SO_CHO_NGOI"] = $arFieldsChuyenDi['PROPERTIES']["SO_CHO_NGOI"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["HANG_XE"] = $arFieldsChuyenDi['PROPERTIES']["HANG_XE"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["MAU_XE"] = $arFieldsChuyenDi['PROPERTIES']["MAU_XE"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["SO_LUONG"] = $arFieldsChuyenDi['PROPERTIES']["SO_LUONG"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["TAI_XE"]["NAME"] = $arFieldsChuyenDi['PROPERTIES']["TAI_XE_NAME"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["TAI_XE"]["ID"] = $arFieldsChuyenDi['PROPERTIES']["TAI_XE_ID"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["TRANG_THAI"] = $arFieldsChuyenDi['PROPERTIES']["TRANG_THAI"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["GIA_CHUAN"]["ORIGINAL"] = intval($arFieldsChuyenDi['PROPERTIES']["GIA_CHUAN"]["VALUE"]);
                        $arResult["BOOKING_INFO"]["BOOKING"]["GIA_CHUAN"]["FORMATED"] = number_format(intval($arFieldsChuyenDi['PROPERTIES']["GIA_CHUAN"]["VALUE"]));
                        $arResult["BOOKING_INFO"]["BOOKING"]["GIA_YEU_CAU"]["ORIGINAL"] = intval($arFieldsChuyenDi['PROPERTIES']["GIA_YEU_CAU"]["VALUE"]);
                        $arResult["BOOKING_INFO"]["BOOKING"]["GIA_YEU_CAU"]["FORMATED"] = number_format(intval($arFieldsChuyenDi['PROPERTIES']["GIA_YEU_CAU"]["VALUE"]));
                        $arResult["BOOKING_INFO"]["BOOKING"]["LOAI_XE"] = $arFieldsChuyenDi['PROPERTIES']["LOAI_XE"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["KIEU_XE"] = $arFieldsChuyenDi['PROPERTIES']["KIEU_XE"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["XE_ID"] = $arFieldsChuyenDi['PROPERTIES']["XE_ID"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["GIA_MOT_KM"] = $arFieldsChuyenDi['PROPERTIES']["GIA_MOT_KM"]["VALUE"];
                        $arResult["BOOKING_INFO"]["BOOKING"]["KHOANG_CACH"] = $arFieldsChuyenDi['PROPERTIES']["KHOANG_CACH"]["VALUE"];
                        //$arResult["BOOKING_INFO"]["BOOKING"]["GIA_CHUAN"] = $arFieldsChuyenDi['PROPERTIES']["GIA_CHUAN"]["VALUE"];
                        //$arResult["BOOKING_INFO"]["BOOKING"]["GIA_CHUAN"] = $arFieldsChuyenDi['PROPERTIES']["GIA_CHUAN"]["VALUE"];

                    }
                }
            return $arResult["BOOKING_INFO"];
            }
        }
    }

    function getListBooking(){
        $arSelect = Array("ID", "IBLOCK_ID", "DATE_CREATE", "NAME", "PROPERTY_*");
        $resBooking = CIBlockElement::GetList(array("DATE_CREATE" => "DESC"),
            array("IBLOCK_ID"=>IB_DAT_XE), false, false,$arSelect);

        while ($ob = $resBooking->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arFields['PROPERTIES'] = $ob->GetProperties();
            $arResult[$arFields["NAME"]] = $arFields;
        }
        return $arResult;
    }

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
            $arResult[$arFields["NAME"]] = $arFields;
        }
        return $arResult;
    }

    function getListTrip($arrFilter=array()){
        $arSelect = Array("ID", "IBLOCK_ID", "DATE_CREATE", "NAME", "PROPERTY_*");
        $arFilter["IBLOCK_ID"] = IB_THONG_TIN_CHUYEN;
        if(!is_array($arrFilter)){
            $arrFilter = array();
        }
        $resBooking = CIBlockElement::GetList(array("DATE_CREATE" => "DESC"),
            array_merge($arFilter,$arrFilter), false, false,$arSelect);

        while ($ob = $resBooking->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arFields['PROPERTIES'] = $ob->GetProperties();
            $arResult[$arFields["NAME"]] = $arFields;
        }
        return $arResult;
    }

    function getTrangThaiLaiXe_Enum(){
        $rsPropertyEnum = CIBlockProperty::GetPropertyEnum(38);
        while ($arPropertyEnum = $rsPropertyEnum->GetNext())
        {
            $arProperty[$arPropertyEnum["ID"]] = $arPropertyEnum;
        }
        return $arProperty;
    }

}
?>