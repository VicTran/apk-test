<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/header.php" );
$APPLICATION->SetTitle( "An phat khanh" );
?>
<div class="white_bg box_sm blog_frame">
	<div class="container">
		<?
		$arResult = $APPLICATION->IncludeComponent(
			"webcomp:news.detail",
			"dang-tin",
			Array(
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"USE_SHARE" => "N",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => 'vn',
				"IBLOCK_ID" => '',
				"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
				"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
				"CHECK_DATES" => "Y",
				"FIELD_CODE" => array("show_counter"),
				"PROPERTY_CODE" => array("YOUTUBE","DOWNLOAD"),
				"IBLOCK_URL" => "",
				"META_KEYWORDS" => "SEO_KEYWORD",
				"META_DESCRIPTION" => "SEO_DESCRIPTION",
				"BROWSER_TITLE" => "-",
				"SET_TITLE" => "Y",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"ADD_NAME_CHAIN" => "Y",
				"ACTIVE_DATE_FORMAT" => "H:i d/m/Y",
				"USE_PERMISSIONS" => "N",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Page",
				"PAGER_TEMPLATE" => "",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"AJAX_OPTION_HISTORY" => "N"
			),
			false
		);
		?>

	</div>
</div>
<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/footer.php" );
?>
