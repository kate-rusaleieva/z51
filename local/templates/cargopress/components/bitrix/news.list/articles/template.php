<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $arItem):?>
        <h3><?=$arItem["DISPLAY_PROPERTIES"]["QUESTION"]["VALUE"];?></h3>
        <div><?=$arItem["DISPLAY_PROPERTIES"]["ANSWER"]["VALUE"];?></div>
<?endforeach;?>

