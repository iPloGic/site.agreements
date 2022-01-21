<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var customComponent $component */

use \Bitrix\Main\Localization\Loc,
	\Bitrix\Main\Application;

//echo "<pre>"; print_r($arResult); echo "</pre>";

if ($arResult["SHOW"] != "N") { ?>
	<div id="site-agreements" class="site-agreements-wrapper">
		<div class="site-agreements-back"></div>
		<div class="site-agreements">
			<div class="site-agreements-close">
				<i class="fas fa-times"></i>
			</div>
			<?=Loc::getMessage("IPL_SA_TEXT")?>
		</div>
	</div>
	<script>
		$(function(){
			$(document).ready(function() {
				$("#site-agreements .site-agreements-close").on("click", function(){
					$("#site-agreements").hide();
					$.cookie('ipl-site-agreements-<?=$arParams["COOKIE_SUFFIX"]?>', 'hide', {
						expires: <?=$arParams["COOKIE_EXPIRES"]?>
					});
				});
			});
		});
	</script>
<? } ?>