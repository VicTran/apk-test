<?
$arSelect = Array(
	"ID",
	"IBLOCK_ID",
	"IBLOCK_SECTION_ID",
	"NAME",
	"ACTIVE_FROM",
	"DETAIL_PAGE_URL",
	"DETAIL_TEXT",
	"DATE_CREATE",
	"DETAIL_TEXT_TYPE",
	"PREVIEW_TEXT",
	"PREVIEW_TEXT_TYPE",
	"PREVIEW_PICTURE",
	"PROPERTY_*"
);
foreach ( $arResult["ITEMS"] as $arItem ) {
	//	Thông tin đặt xe
	$arFilter     = Array( "IBLOCK_ID" => 5, "PROPERTY_KHACH_HANG_ID" => $arItem["ID"] );
	$res          = CIBlockElement::GetList( Array(), $arFilter, false, Array( "nPageSize" => 1 ), $arSelect );
	$arIDChuyenDi = array();
	$chuyendiID   = 0;
	if ( $ob = $res->GetNextElement() ) {
		$arDatXe                             = $ob->GetFields();
		$arDatXe["PROPERTIES"]               = $ob->GetProperties();
		$arResult["DAT_XE"][ $arItem["ID"] ] = $arDatXe;
		$chuyendiID                          = $arDatXe["PROPERTIES"]["CHUYEN_ID"]["VALUE"];
	}

	if ( $chuyendiID ) {
		//Thông tin chuyến đi
		$arFilter = Array( "IBLOCK_ID" => 7, 'ID' => $chuyendiID );
		$res      = CIBlockElement::GetList( Array(), $arFilter, false, Array( "nPageSize" => 1 ),
			$arSelect );
		while ( $ob = $res->GetNextElement() ) {
			$arChuyenDi                                 = $ob->GetFields();
			$arChuyenDi["PROPERTIES"]                   = $ob->GetProperties();
			$arResult["CHUYEN_DI"][ $arItem["ID"] ] = $arChuyenDi;
		}
	}
}

?>