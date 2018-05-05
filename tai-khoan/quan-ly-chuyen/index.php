<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/header.php" );
$APPLICATION->SetTitle( "An phat khanh" );
global $USER;
if (!$USER->IsAuthorized()) {
	LocalRedirect('/tai-khoan/');
}
?>
<div class="white_bg box_sm blog_frame">
	<div class="container">
		<?
		$GLOBALS['filter_user'] = array("PROPERTY_USER_ID"=>$USER->GetID());
		$APPLICATION->IncludeComponent(
			"webcomp:news.list",
			"quanlychuyen",
			Array(
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => 'vn',
				"IBLOCK_ID" => 6,
				"NEWS_COUNT" => "10",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "filter_user",
				"FIELD_CODE" => array(),
				"PROPERTY_CODE" => array("USER_ID"),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => 'd/m/Y H:i:s',
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => '',
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => 'vv_list',
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"AJAX_OPTION_HISTORY" => "N",
			),
			false
		);
		?>

	</div>
</div>
<?
require( $_SERVER["DOCUMENT_ROOT"] . "/webmin/footer.php" );
?>
