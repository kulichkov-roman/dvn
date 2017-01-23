<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<?$isIndex = CSite::inDir(SITE_DIR."index.php");?>
<!doctype html>
<html>
<head>
 <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/style.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/selectizit.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/jquery.nouislider.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/grid.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/jquery.bxslider.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/jquery.fancybox.css")?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/developers.css")?>


    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/iefix.css" />
    <![endif]-->

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/html5.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery-1.11.1.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/assets/js/jquery.form.js')?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.placeholder.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.fancybox.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/smoothscroll.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.validate.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.dotdotdot.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.bxslider.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/dropdown.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.liblink.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/wNumb.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.nouislider.all.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/selectize.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/jquery.inputmask.bundle.min.js")?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/assets/js/action.js")?>

    <?CJSCore::Init(array('ls'))?>
    <?$APPLICATION->ShowHead()?>

    <script>
        var SiteOptions = {
            SITE_DIR : '<?=SITE_DIR?>',
            clear_cache: <?=$_REQUEST['clear_cache']=='Y'?'"Y"':'""'?>
        };
    </script>

    <script src="http://cdn.callibri.ru/callibri.js" type="text/javascript"></script>

    <?if($_REQUEST['print'] == 'Y'){?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/css/print.css")?>
        <script>
            $(function(){
                window.print();
            });
        </script>
    <?}?>
    <?$isCatalog = CSite::InDir(SITE_DIR.'catalog/');?>

	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PWJXWPJ');</script>
<!-- End Google Tag Manager --> 
	
<!— Facebook Pixel Code —>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1221473367916622'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1221473367916622&e.."
/></noscript>
<!— DO NOT MODIFY —>
<!— End Facebook Pixel Code —>
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=ZwUoxe8DVNMEkUNNDfXpPkMEEKAmYxAoLx1Pyw83iiGiI0M2TSr62zpnn1t5q6SAydyLQJ4m6bvc*e*On89qx6fZcCEfx/vZ7NxgyVqp3PoDehf2tI3JqSL2pPm00Sil7bS7jhdsYV7hN6m8xaQOaYx1RCUtAGHxV9ia4kObfGA-&pixel_id=1000060296';</script>
</head>
<!--[if IE 9]>     <body class="forie"> <![endif]-->
<!--[if !IE]><!--> <body>            <!--<![endif]-->
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<?$arTheme = $APPLICATION->IncludeComponent(
    "tiangroup:site.theme",
    "",
    array(
        'MODULE_ID'=>'ittian.realty',
        'CLASS_NAME'=>'CRealty'
    ),
    false,
    array("HIDE_ICONS" => "Y")
);?>
<?
$color = $arTheme['COLOR']['VALUE'];
if($color && $color != 'default')
{
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/themes/".$color."/css/style.css");
}
$favicon_file = CRealty::GetOption('FAVICON_FILE');
if($favicon_file != ''){
    $APPLICATION->AddHeadString('<link rel="shortcut icon" href="'.$favicon_file.'" type="image/x-icon" />');
}
?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWJXWPJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="main">
<div class="fix-dop">
	<div class="top-head" id="tov">
			<div class="wrapper grid-row">
				<div class="aside">
					<div class="as-icon"></div>
					<a href="<?=SITE_DIR?>favorite/" class="as-desc"><?=GetMessage('HEADER_FAVORITE')?> <span><d>0</d></span></a>
				</div>
			</div>
		</div>
</div>
    <div class="sidebar">
        <a class="s-back"><?=GetMessage('HEADER_BACK')?></a>
        <ul>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600000",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "3",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false,
                array("HIDE_ICONS" => "Y")
            );?>
        </ul>
    </div>

    <header>
        <div class="top-head">
            <div class="wrapper grid-row">
                <a class="side-link"></a>
                <div class="t-nav-wrap">
                    <ul class="t-nav">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600000",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "3",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );?>
                    </ul>
                </div>
                <div class="aside">
                    <div class="as-icon"></div>
                    <a href="<?=SITE_DIR?>favorite/" class="as-desc"><?=GetMessage('HEADER_FAVORITE')?> <span><d>0</d></span></a>
                </div>
                <script>
                    var favorite = BX.localStorage.get('favorite');
                    if(favorite && favorite.length > 0){
                        $('.as-desc span d').text(favorite.length);
                    }
                </script>
            </div>
        </div>
        <div class="middle-head<?=$isIndex?'':' inner'?>">
            <div class="wrapper grid-row">
                <div class="col-sm-3 logo-wrap">
                    <?
                    $logo_file = CRealty::GetOption('LOGO_FILE');
                    if($logo_file == ''){
                        $logo_file = SITE_TEMPLATE_PATH.'/assets/images/logo.png';
                    }
                    ?>
                    <a class="logo " href="<?=SITE_DIR?>"><img src="<?=$logo_file?>"></a>
                </div>
                <div class="mid-b col-sm-6">
                    <?$APPLICATION->IncludeFile(SITE_DIR."include/header_contacts_data.php", Array(), Array("MODE"=>"text","SHOW_BORDER"=>false));?>
                </div>
                <div class="top-btn col-sm-3">
                    <a href="<?=SITE_DIR?>request/" class="button"><?$APPLICATION->IncludeFile(SITE_DIR."include/request_btn.php", Array(), Array("MODE"=>"text"));?></a>
                </div>
            </div>
        </div>
        <div class="bottom-head<?=$isIndex?'':' inner'?>">
            <div class="wrapper">
                <a class="m-menu"><?=GetMessage('HEADER_REALTY_CATALOG')?><span></span></a>
                <?$APPLICATION->IncludeFile(SITE_DIR."include/header_realty_menu.php", Array(), Array("MODE"=>"text","SHOW_BORDER"=>false));?>
            </div>
        </div>
    </header>
<?if(!$isIndex){?>
    <div class="wrapper">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", array(
                "START_FROM" => "1",
                "PATH" => "",
                "SITE_ID" => SITE_ID
            ),
            false
        );?>
        <h1>
            <?if($isCatalog){?>
                <?$APPLICATION->ShowProperty('h1')?>
            <?} else {?>
                <?$APPLICATION->ShowTitle(false);?>
            <?}?>
        </h1>
    </div>

    <div class="content">

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "top",
                "AREA_FILE_RECURSIVE" => "Y",
                "EDIT_TEMPLATE" => ""
            ),
            false,
            array("HIDE_ICONS" => "Y")
        );?>

        <div class="wrapper<?=$arTheme['SECTIONS']['INNER_SIDE']['VALUE']=='left'?' onleft':''?>">

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "aside",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_TEMPLATE" => ""
                ),
                false,
                array("HIDE_ICONS" => "Y")
            );?>

            <div class="left">

<?}?>
