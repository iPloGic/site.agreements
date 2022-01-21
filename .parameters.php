<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use \Bitrix\Main\Config\Option,
	\Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Loader;

	$arComponentParameters = [
		"GROUPS" => [
			/*"DEFAULT" => [ "NAME" => Loc::getMessage("GROUP_DEFAULT"), ],*/
		],
		"PARAMETERS" => [

			"COOKIE_EXPIRES" => [
				"PARENT" => "BASE",
				"NAME" => Loc::getMessage("PARAMETER_COOKIE_EXPIRES"),
				"TYPE" => "STRING",
				"DEFAULT" => '7',
			],
			"COOKIE_SUFFIX" => [
				"PARENT" => "BASE",
				"NAME" => Loc::getMessage("PARAMETER_COOKIE_SUFFIX"),
				"TYPE" => "STRING",
				"DEFAULT" => 'a',
			],

			"CACHE_TIME" => [
				"DEFAULT" => 36000,
				"PARENT" => "CACHE_SETTINGS",
			],
			"CACHE_TYPE"  => [
				"PARENT" => "CACHE_SETTINGS",
				"NAME" => Loc::getMessage("COMP_PROP_CACHE_TYPE"),
				"TYPE" => "LIST",
				"VALUES" => [
					"A" => Loc::getMessage("COMP_PROP_CACHE_TYPE_AUTO")." ".Loc::getMessage("COMP_PARAM_CACHE_MAN"), 
					"Y" => Loc::getMessage("COMP_PROP_CACHE_TYPE_YES"), 
					"N" => Loc::getMessage("COMP_PROP_CACHE_TYPE_NO")],
				"DEFAULT" => "N",
				"ADDITIONAL_VALUES" => "N",
				"REFRESH" => "Y"
			],
		],
	];

?>
