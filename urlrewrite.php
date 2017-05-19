<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#/faq/(.*)/(?.*)?#",
		"RULE" => "SECTION_ID=\$1",
		"ID" => "",
		"PATH" => "/faq/index.php",
	),
);

?>