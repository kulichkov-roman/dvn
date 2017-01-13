<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/catalog/([0-9a-zA-Z\\-_]+)/([0-9]+)(\\\\?(.*))#",
		"RULE" => "CATALOG_SECTION_CODE=\$1&ELEMENT_ID=\$2&\$5",
		"ID" => "",
		"PATH" => "/catalog/detail.php",
	),
	array(
		"CONDITION" => "#^/services/([0-9a-zA-Z\\-]+)/([0-9]+)(\\\\?(.*))#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_ID=\$2&\$5",
		"ID" => "",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/question-answer/([0-9a-zA-Z\\-]+)/(\\\\?(.*))#",
		"RULE" => "SECTION_CODE=\$1&\$4",
		"ID" => "",
		"PATH" => "/question-answer/index.php",
	),
	array(
		"CONDITION" => "#^/services/([0-9a-zA-Z\\-]+)/(\\\\?(.*))#",
		"RULE" => "SECTION_CODE=\$1&\$4",
		"ID" => "",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/([0-9a-zA-Z\\-_]+)(\\\\?(.*))#",
		"RULE" => "CATALOG_SECTION_CODE=\$1&\$4",
		"ID" => "",
		"PATH" => "/catalog/index.php",
	),
	array(
		"CONDITION" => "#^/news/([0-9a-zA-Z\\-_]+)(\\\\?(.*))#",
		"RULE" => "ELEMENT_CODE=\$1&\$4",
		"ID" => "",
		"PATH" => "/news/detail.php",
	),
	array(
		"CONDITION" => "#^/about/staff/([0-9]+)(\\\\?(.*))#",
		"RULE" => "ELEMENT_ID=\$1&\$4",
		"ID" => "",
		"PATH" => "/about/staff/detail.php",
	),
	array(
		"CONDITION" => "#^/o-mikrorayone/khod-stroitelstva/([0-9a-zA-Z\\-_]+)(\\\\?(.*))#",
		"RULE" => "ELEMENT_CODE=\$1&\$4",
		"ID" => "",
		"PATH" => "/o-mikrorayone/khod-stroitelstva/detail.php",
	),
);

?>
