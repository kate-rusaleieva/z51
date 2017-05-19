<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
$strReturn .= '<div class="container">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<span>
				<a class="home" href="'.$arResult[$index]["LINK"].'" title="'.$title.'">
					'.$title.'
				</a>
			</span>';
	}
	else
	{
		$strReturn .= '
			<span>
				<span>'.$title.'</span>
			</span>';
	}
}

$strReturn .= '<div style="clear:both"></div></div>';

return $strReturn;
