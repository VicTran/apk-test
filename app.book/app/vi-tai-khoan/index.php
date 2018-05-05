<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("Ví tài khoản");
?>

<?$APPLICATION->IncludeComponent("webmin:main.profile", "vi.tai.khoan", array(
    "AJAX_MODE" => "N",
    "AJAX_OPTION_SHADOW" => "Y",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "AJAX_OPTION_HISTORY" => "N",
    "SET_TITLE" => "N",
    "USER_PROPERTY" => array(
        0 => "UF_ID_GRAB",
    ),
    "SEND_INFO" => "N",
    "CHECK_RIGHTS" => "N",
    "USER_PROPERTY_NAME" => "",
    "AJAX_OPTION_ADDITIONAL" => "",
    "URL_PROFILE" => "/profile/"
),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");?>