<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if ($USER->isAdmin()) {
    /*INCLUDE FILE UPLOADER BETA*/
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/bitrix/components/artismedia/section_galery/uploader/uploader.php")) {
        require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/components/artismedia/section_galery/uploader/uploader.php");
    }?>
	<div id="bx_upload_answer"></div>
<?}?>

<?$APPLICATION->IncludeComponent(
	"artismedia:section_gallery.section.list",
	"",
	array(
		/*IBLOCK SETTINGS*/
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],

		/*SECTION SETTINGS*/
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
		"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
		"HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
		"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : ''),
		"SECTIONS_SHOW_PICTURE" => $arParams["SECTIONS_SHOW_PICTURE"],
		"SECTIONS_LIVE_PICTURE_RESIZE" => $arParams["SECTIONS_LIVE_PICTURE_RESIZE"],
		"SECTION_SHOW_TITLE" => $arParams["SECTION_SHOW_TITLE"],
		"SECTION_TITLE" => $arParams["SECTION_TITLE"],

		/*CACHE SETTINGS*/
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
	),
	$component
);?>

<?$intSectionID = 0;?>
<?$intSectionID = $APPLICATION->IncludeComponent(
	"artismedia:section_gallery.section",
	"",
	array(
        /*IBLOCK SETTINGS*/
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],

        /*SECTION SETTINGS*/
        "SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],

        /*SLIDER SETTINGS*/
        "ELEMENT_SLIDER_LOOP" => $arParams["ELEMENT_SLIDER_LOOP"],
        "ELEMENT_SLIDER_THUMBS" => $arParams["ELEMENT_SLIDER_THUMBS"],
        "ELEMENT_SLIDER_COUNTER" => $arParams["ELEMENT_SLIDER_COUNTER"],
        "ELEMENT_SLIDER_TITLE" => $arParams["ELEMENT_SLIDER_TITLE"],
        "ELEMENT_SLIDER_AUTOPLAY" => $arParams["ELEMENT_SLIDER_AUTOPLAY"],
        "ELEMENT_SLIDER_AUTOPLAY_TIME" => $arParams["ELEMENT_SLIDER_AUTOPLAY_TIME"],
        "ELEMENT_SLIDER_HIDEFLASH" => $arParams["ELEMENT_SLIDER_HIDEFLASH"],
        "ELEMENT_SLIDER_ZOOM" => $arParams["ELEMENT_SLIDER_ZOOM"],
        "SLIDER_SETTINGS" => $arParams["SLIDER_SETTINGS"],

        /*SECTION LIST SETTINGS*/
		"ELEMENT_BLOCK_SHOW_TITLE" => $arParams["ELEMENT_BLOCK_SHOW_TITLE"],
		"ELEMENT_BLOCK_TITLE" => $arParams["ELEMENT_BLOCK_TITLE"],
		"ELEMENT_SHOW_TITLE" => $arParams["ELEMENT_SHOW_TITLE"],
        "ELEMENT_LIVE_PICTURE_RESIZE" => $arParams["ELEMENT_LIVE_PICTURE_RESIZE"],
        "ELEMENT_TITLE_TYPE" => $arParams["ELEMENT_TITLE_TYPE"],
        "INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
        "SHOW_ALL_WO_SECTION" => $arParams["SHOW_ALL_WO_SECTION"],

        "PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],

        "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
        "ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],

        /*CACHE SETTINGS*/
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],

        /*ADDITIONAL_SETTINGS*/
        "SET_TITLE" => $arParams["SET_TITLE"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "INCLUDE_JQUERY" => $arParams["INCLUDE_JQUERY"],
        "ADD_SECTIONS_CHAIN" => "N",
	),
	$component
);?>