<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Частые вопросы");?>
    ?>


    <!-- MAIN TITLE -->
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Частые вопросы</h1>
        </div>
    </div><!-- /.main-title -->

    <!-- BREADCRUMBS -->
    <div class="breadcrumbs">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
            "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
            "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
        ),
            false
        );?>
    </div><!-- /.breadcrumbs -->

    <div class="container">

        <div class="row margin-bottom-60 hentry">

            <div class="col-xs-12  col-md-9">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "articles",
                    array(
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "AJAX_MODE" => "Y",
                        "IBLOCK_TYPE" => "questions",
                        "IBLOCK_ID" => "1",
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
                            0 => "QUESTION",
                            1 => "ANSWER",
                            2 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
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
                        "COMPONENT_TEMPLATE" => "articles",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_BASE_LINK" => "",
                        "FILE_404" => ""
                    ),
                    false
                );?>
            </div><!-- /.col -->

            <div class="col-xs-12  col-md-3">

                <div class="sidebar widget_nav_menu faq">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "right_menu", Array(
                        "ROOT_MENU_TYPE" => "podrazdel",	// Тип меню для первого уровня
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "podrazdel",	// Тип меню для остальных уровней
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "SECTION_ID",
                            1 => "page",
                            2 => "",
                        ),
                        "COMPONENT_TEMPLATE" => "left_menu",
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    ),
                        false
                    );?>
                </div>

                <a target="_self" class="btn btn-info" id="button_requestQuote"  data-toggle="modal" data-target="#myModal">Задать вопрос</a>

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>