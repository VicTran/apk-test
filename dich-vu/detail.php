<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/header.php");
$APPLICATION->SetTitle("An phat khanh");
?>
<div class="row">
<div class="col-md-9">
	<div class="news-detail">
	   <?
        $arResult = $APPLICATION->IncludeComponent(
        	"webcomp:news.detail",
        	"",
        	Array(
        		"DISPLAY_DATE" => "Y",
        		"DISPLAY_NAME" => "Y",
        		"DISPLAY_PICTURE" => "Y",
        		"DISPLAY_PREVIEW_TEXT" => "Y",
        		"USE_SHARE" => "N",
        		"AJAX_MODE" => "N",
        		"IBLOCK_TYPE" => IBLOCK_TYPE,
        		"IBLOCK_ID" => IBLOCK_DICH_VU,
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
        		"ACTIVE_DATE_FORMAT" => DATE_SHOW_FORMAT,
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

		<div class="review-star pull-right">
			<div class="star">
				<a href="#">
					<i class="fa fa-star" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-star" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-star" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-star" aria-hidden="true"></i>
				</a>
				<a href="#">
					<i class="fa fa-star" aria-hidden="true"></i>
				</a>
			</div>
			3.42 (68.33%)<br/>
			12 bình chọn
		</div>

		<div class="clearfix"></div>
		<!--share-->
		<?
        $APPLICATION->IncludeComponent(
        	"webcomp:static",
        	"social.like",
        	Array(),
        false
        );
        ?>
	</div>
    <?
       $APPLICATION->IncludeComponent(
        	"webcomp:static",
        	"comment.box",
        	Array(),
        false
        );
        ?>
	<div class="other-news">
		<div class="row">
			<div class="col-sm-6 new-other">
			<?
            $APPLICATION->IncludeComponent(
            "webcomp:news.list",
            "other.news",
            Array(
            	"DISPLAY_DATE" => "Y",
            	"DISPLAY_NAME" => "Y",
            	"DISPLAY_PICTURE" => "Y",
            	"DISPLAY_PREVIEW_TEXT" => "Y",
            	"AJAX_MODE" => "N",
            	"IBLOCK_TYPE" => IBLOCK_TYPE,
            	"IBLOCK_ID" => IBLOCK_DICH_VU,
            	"NEWS_COUNT" => "6",
            	"SORT_BY1" => "ACTIVE_FROM",
            	"SORT_ORDER1" => "DESC",
            	"SORT_BY2" => "SORT",
            	"SORT_ORDER2" => "DESC",
            	"FILTER_NAME" => "",
            	"FIELD_CODE" => array(),
            	"PROPERTY_CODE" => array(),
            	"CHECK_DATES" => "Y",
            	"DETAIL_URL" => "",
            	"PREVIEW_TRUNCATE_LEN" => "",
            	"ACTIVE_DATE_FORMAT" => DATE_SHOW_FORMAT,
            	"SET_TITLE" => "N",
            	"SET_STATUS_404" => "N",
            	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
            	"PAGER_TITLE" => PAGER_TITLE,
            	"PAGER_SHOW_ALWAYS" => "N",
            	"PAGER_TEMPLATE" => PAGER_TEMPLATE,
            	"PAGER_DESC_NUMBERING" => "N",
            	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            	"PAGER_SHOW_ALL" => "N",
            	"AJAX_OPTION_JUMP" => "N",
            	"AJAX_OPTION_STYLE" => "N",
            	"AJAX_OPTION_HISTORY" => "N",
                "TITLE_BAR" => "TIN MỚI HƠN",
            ),
            false
            );
            ?>
			</div>
			<div class="col-sm-6 old-other">
			<?
            $APPLICATION->IncludeComponent(
            "webcomp:news.list",
            "other.news",
            Array(
            	"DISPLAY_DATE" => "Y",
            	"DISPLAY_NAME" => "Y",
            	"DISPLAY_PICTURE" => "Y",
            	"DISPLAY_PREVIEW_TEXT" => "Y",
            	"AJAX_MODE" => "N",
            	"IBLOCK_TYPE" => IBLOCK_TYPE,
            	"IBLOCK_ID" => IBLOCK_DICH_VU,
            	"NEWS_COUNT" => "6",
            	"SORT_BY1" => "ACTIVE_FROM",
            	"SORT_ORDER1" => "DESC",
            	"SORT_BY2" => "SORT",
            	"SORT_ORDER2" => "DESC",
            	"FILTER_NAME" => "",
            	"FIELD_CODE" => array(),
            	"PROPERTY_CODE" => array(),
            	"CHECK_DATES" => "Y",
            	"DETAIL_URL" => "",
            	"PREVIEW_TRUNCATE_LEN" => "",
            	"ACTIVE_DATE_FORMAT" => DATE_SHOW_FORMAT,
            	"SET_TITLE" => "N",
            	"SET_STATUS_404" => "N",
            	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
            	"PAGER_TITLE" => PAGER_TITLE,
            	"PAGER_SHOW_ALWAYS" => "N",
            	"PAGER_TEMPLATE" => PAGER_TEMPLATE,
            	"PAGER_DESC_NUMBERING" => "N",
            	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            	"PAGER_SHOW_ALL" => "N",
            	"AJAX_OPTION_JUMP" => "N",
            	"AJAX_OPTION_STYLE" => "N",
            	"AJAX_OPTION_HISTORY" => "N",
                "TITLE_BAR" => "TIN CŨ HƠN",
            ),
            false
            );
            ?>	
			</div>
		</div>
	</div><!--Other news-->

    
</div>
<?           
    $APPLICATION->IncludeComponent("webmin:main.include", ".default", array(
    "AREA_FILE_SHOW" => "sect",
    "AREA_FILE_SUFFIX" => "right",
    "AREA_FILE_RECURSIVE" => "Y",
    "EDIT_TEMPLATE" => "sect_right.php"
    ),
    false
    );       
?>

</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/webmin/footer.php");
?>