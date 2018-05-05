<?
$arUrlRewrite = array(
	array(
		"CONDITION"	=>	"#^/([a-z-0-9-]+).html#",
		"RULE"	=>	"ELEMENT_CODE=$1",
		"ID"	=>	"",
		"PATH"	=>	"/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/([a-z-]+)/([a-z-0-9-]+).html#",
		"RULE"	=>	"FOLDER=$1&ELEMENT_CODE=$2",
		"ID"	=>	"",
		"PATH"	=>	"/$1/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/([a-z-]+)/(.+)_(.+).html#",
		"RULE"	=>	"FOLDER=$1&ELEMENT_ID=$2",
		"ID"	=>	"",
		"PATH"	=>	"/$1/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/([a-z-]+)/([a-z-0-9-]+)/#",
		"RULE"	=>	"FOLDER=$1&SECTION_CODE=$2",
		"ID"	=>	"",
		"PATH"	=>	"/$1/list.php",
	),
	array(
		"CONDITION"	=>	"#^/([a-z-]+)/([0-9-]+)/#",
		"RULE"	=>	"FOLDER=$1&SECTION_ID=$2",
		"ID"	=>	"",
		"PATH"	=>	"/$1/list.php",
	),
	array(
		"CONDITION"	=>	"#(.*).html#",
		"RULE"	=>	"PAGE=$1",
		"ID"	=>	"vportal:news.detail",
		"PATH"	=>	"$1.php",
	),
);

?>