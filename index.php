<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Официальный сайт микрорайона «Дивногорский»");
$APPLICATION->SetPageProperty("title", "Официальный сайт микрорайона «Дивногорский» - Главная страница");
$APPLICATION->SetTitle("Главная");
?>

<?
$slider_width = $arTheme['SECTIONS']['SLIDER_WIDTH']['VALUE'];
$APPLICATION->IncludeComponent("bitrix:news.list",
    "slider_onmain",
    array(
        "IBLOCK_TYPE" => "ittian_realty_content",
        "IBLOCK_ID" => "3",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(),
        "PROPERTY_CODE" => array("LINK"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "slider",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SLIDER_WIDTH"=>$slider_width
    ),
    false,
    array('HIDE_ICONS' => 'Y')
);?>


<?if($arTheme['SECTIONS']['SERVICES_ONMAIN']['VALUE'] != 'hide'){?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "services_onmain",
        Array(
            "IBLOCK_TYPE" => "ittian_realty_content",
            "IBLOCK_ID" => "1",
            "SECTION_ID" => "",
            "SECTION_CODE" => "",
            "COUNT_ELEMENTS" => "N",
            "TOP_DEPTH" => "1",
            "SECTION_FIELDS" => array("DESCRIPTION", "PICTURE", "DETAIL_PICTURE", ""),
            "SECTION_USER_FIELDS" => array("", ""),
            "VIEW_MODE" => "LIST",
            "SHOW_PARENT_NAME" => "Y",
            "SECTION_URL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_GROUPS" => "Y",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );?>
<?}?>


<?if($arTheme['SECTIONS']['SPEC_ONMAIN']['VALUE'] != 'hide'){?>
    <div class="news">
        <div class="wrapper">
            <div class="big-title"><a href="<?=SITE_DIR?>service/akcii/"><?$APPLICATION->IncludeFile(SITE_DIR."include/index/inc_actions_title.php", Array(), Array("MODE"=>"text"));?></a></div>
            <?
            global $arrActionMainPageFilter;
            $arrActionMainPageFilter = array(
                'PROPERTY_SHOW_MAIN_PAGE_VALUE' => 'Y'
            );
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news",
                Array(
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "ittian_realty_content",
                    "IBLOCK_ID" => "1",
                    "NEWS_COUNT" => "2",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "arrActionMainPageFilter",
                    "USE_FILTER" => "Y",
                    "FIELD_CODE" => array(''),
                    "PROPERTY_CODE" => array(""),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PAGER_TEMPLATE" => "main",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "HIDE_PAGER"=>"Y"
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        </div>
    </div>
<?}?>

    <div class="comp">
        <div class="wrapper">
            <div class="big-title"><a><?$APPLICATION->IncludeFile(SITE_DIR."include/index/inc_about_title.php", Array(), Array("MODE"=>"text"));?></a></div>

            <div class="grid-row">
                <div class="about col-lg-8">
                    <?$APPLICATION->IncludeFile(SITE_DIR."include/index/inc_about.php", Array(), Array("MODE"=>"html"));?>
                </div>
                <div class="right col-lg-4">
                    <div class="banner">
                        <?$APPLICATION->IncludeFile(SITE_DIR."include/index/inc_banner.php", Array(), Array("MODE"=>"html"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?if($arTheme['SECTIONS']['NEWS_ONMAIN']['VALUE'] != 'hide'){?>
    <div class="news">
        <div class="wrapper">
            <div class="big-title"><a href="<?=SITE_DIR?>news/"><?$APPLICATION->IncludeFile(SITE_DIR."include/index/inc_news_title.php", Array(), Array("MODE"=>"text"));?></a></div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news",
                Array(
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "ittian_realty_content",
                    "IBLOCK_ID" => "4",
                    "NEWS_COUNT" => "5",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(''),
                    "PROPERTY_CODE" => array(""),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "SET_TITLE" => "N",
                    "SET_STATUS_404" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PAGER_TEMPLATE" => "main",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "HIDE_PAGER"=>"Y"
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        </div>
    </div>
<?}?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
