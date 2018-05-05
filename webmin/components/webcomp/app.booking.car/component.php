<?
if($arParams["STEP"]==2){
    if($GLOBALS["USER"]->GetID() > 0){
        LocalRedirect('/app.book/app/book/step3/');
    }
}
/*switch ($arParams["STEP"]) {
    case 2: //Neu o buoc 2
        //if($_SESSION["BOOKING"]['STEP'] < 2){
          //  LocalRedirect($arParams["URL_STEP_1"]);
        //}
        //break;
    case 3: //Neu o buoc 3
        if($_SESSION["BOOKING"]['STEP'] < 3 && $_SESSION["BOOKING"]['STEP'] > 1){
            LocalRedirect($arParams["URL_STEP_".$_SESSION["BOOKING"]['STEP']]);
        }elseif(!$_SESSION["BOOKING"]['STEP'] && ($_REQUEST["bookingID"] != 0 || $_REQUEST["bookingID"]=="" )){ //Finish
            LocalRedirect($arParams["URL_STEP_1"]);
        }

        break;
    case "final":

        $arResult["BOOKING_INFO"] = CBooking::getInfoBookingByID($_REQUEST["booking_id"]);
       break;

}*/
$this->IncludeComponentTemplate($componentPage);
?>