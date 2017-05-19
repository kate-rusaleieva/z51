<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="main-navigation js-main-nav">

<?
$previousLevel = 0;
$firstRoot = false;
foreach($arResult as $arItem):?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>

    <?if ($arItem["IS_PARENT"]):?>

        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="menu-item-has-children <?if ($arItem["SELECTED"]):?> current-menu-item<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <ul role="menu" class="sub-menu">
        <?else:?>
            <li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>menu-item-has-children<?endif?>"><?=$arItem["TEXT"]?></a>
            <ul role="menu" class="sub-menu">
        <?endif?>

    <?else:?>

        <?if ($arItem["PERMISSION"] > "D"):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li<?if ($arItem["SELECTED"]):?> class="current-menu-item"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

        <?else:?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li><a href="" class="<?if ($arItem["SELECTED"]):?>current-menu-item<?else:?>current-menu-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

        <?endif?>

    <?endif?>

    <?
    $previousLevel = $arItem["DEPTH_LEVEL"];
    if ($arItem["DEPTH_LEVEL"] == 1)
        $firstRoot = true;
    ?>


<?endforeach?>

    <?if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?endif?>

    </ul>
<?endif?>