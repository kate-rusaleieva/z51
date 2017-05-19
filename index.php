<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <!-- JUMBOTRON -->
<div class="jumbotron jumbotron--with-captions">
	<div data-interval="5000" data-ride="carousel" id="headerCarousel" class="carousel slide">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "LINK_TEXT",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "news",
		"AJAX_OPTION_ADDITIONAL" => "undefined",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_BASE_LINK" => "",
		"FILE_404" => ""
	),
	false
);?>
            <div class="container">
             <a data-slide="prev" role="button" href="#headerCarousel" class="left jumbotron__control"> <i class="fa fa-caret-left"></i> </a> <a data-slide="next" role="button" href="#headerCarousel" class="right jumbotron__control"> <i class="fa fa-caret-right"></i> </a>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.carousel -->
</div>
<!-- /.jumbotron -->
<!-- --><!-- -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>