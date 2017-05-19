<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul>

<?
$previousLevel = 0;
$firstRoot = false;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

        <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <ul>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>

				<li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>

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