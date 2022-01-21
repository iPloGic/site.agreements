<?
if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true ) {
	die();
}

use \Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Loader;


class iplogicSiteAgreements extends CBitrixComponent
{
	protected $errors = [];


	function __construct($component = null)
	{
		parent::__construct($component);
	}


	function onPrepareComponentParams($arParams)
	{
		if( !$arParams["COOKIE_EXPIRES"] ) {
			$arParams["COOKIE_EXPIRES"] = 7;
		}
		return $arParams;
	}


	function executeComponent()
	{
		$this->prepareResult();
		$this->includeComponentTemplate();
	}


	protected function prepareResult()
	{
		$this->arResult["SHOW"] = "Y";
		if(
			isset($_COOKIE["ipl-site-agreements-" . $this->arParams["COOKIE_SUFFIX"]]) &&
			$_COOKIE["ipl-site-agreements-" . $this->arParams["COOKIE_SUFFIX"]] == "hide"
		) {
			$this->arResult["SHOW"] = "N";
		}
	}

}