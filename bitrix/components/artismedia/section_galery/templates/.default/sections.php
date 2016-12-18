<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<div class="container-fluid ">
    <?$APPLICATION->IncludeComponent(
        "artismedia:section_gallery.section.list",
        "",
        array(
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "COUNT_ELEMENTS" => $arParams["SECTIONS_COUNT_ELEMENTS"],
            "TOP_DEPTH" => $arParams["SECTIONs_TOP_DEPTH"],
            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
            "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
            "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : ''),
            "SECTIONS_SHOW_PICTURE" => $arParams["SECTIONS_SHOW_PICTURE"],
            "SECTIONS_LIVE_PICTURE_RESIZE" => $arParams["SECTIONS_LIVE_PICTURE_RESIZE"],
            "SECTION_SHOW_TITLE" => $arParams["SECTION_SHOW_TITLE"],
            "SECTION_TITLE" => $arParams["SECTION_TITLE"],
            "SHOW_ALL_WO_SECTION" => $arParams["SHOW_ALL_WO_SECTION"],
        ),
        $component
    );?>
</div>