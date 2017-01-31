<?if(!$isIndex){?>

            </div>

        </div>
    </div>
<?}?>


<div class="break"></div>
</div>
<footer>
    <div class="top-foot">
        <div class="wrapper">
            <div class="foot-row">
                <div class="left-menu col-lg-8">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "footer", array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600000",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                        false
                    );?>
                </div>
                <div class="search-body col-lg-4" id="search-block">
                    <?$APPLICATION->IncludeComponent("bitrix:search.form", "main", Array(
                            "USE_SUGGEST" => "N",
                            "PAGE" => SITE_DIR."search/",
                        ),
                        false,
                        array('HIDE_ICONS' => 'Y')
                    );?>
                    <?$APPLICATION->IncludeFile(SITE_DIR."include/search_title.php", Array(), Array("MODE"=>"html"));?>
                </div>
            </div>
            <div class="foot-row">
                <div class="copy col-lg-8">
                    <?$APPLICATION->IncludeFile(SITE_DIR."include/inc_copyright.php", Array(), Array("MODE"=>"text"));?>
                    Разработка сайта — <a href="http://soft-engineering.pro/" target="_blank" class="footer__developers-link">Engineering.PRO</a>
                    <?if(IsModuleInstalled('ittian.realtypersonal')){?>
                        <div class="personal-enter" style=""><a href="<?=SITE_DIR?>personal/"><?=GetMessage('FOOTER_PERSONAL')?></a></div>
                    <?}?>
                </div>
                <div class="soc col-lg-4" >
                    <div class="left col-lg-5">
                        <?$APPLICATION->IncludeFile(SITE_DIR."include/inc_ss_title.php", Array(), Array("MODE"=>"html"));?>
                    </div>
                    <div class="right col-lg-7">
                        <?$APPLICATION->IncludeFile(SITE_DIR."include/inc_ss.php", Array(), Array("MODE"=>"text"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?
$APPLICATION->IncludeComponent('bitrix:main.include', '',
    Array(
        'AREA_FILE_SHOW' => 'file',
        'PATH' => '/local/include/site_templates/hd_traffgui.php',
        'EDIT_TEMPLATE' => ''
    ),
    false
);
?>
</body>
</html>
