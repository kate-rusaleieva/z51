<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="carousel-inner">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?if (next($arResult["ITEMS"])):?>
      <div class="item active">
    <?else:?>
      <div class="item">
    <?endif;?>
        <img src="/local/templates/cargopress/images/placeholders/1920x600.png" alt="">
        <div class="container">
            <div class="jumbotron-content">
                <div class="jumbotron-content__description">
                    <div class="p1">
                        <span class="s1"><?=$arItem["NAME"]?></span>
                    </div>
                    <div>
                        <?if (!empty($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'])):?>
                            <a target="_self" href="<?=$arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];?>" class="btn btn-primary"><?=$arItem['DISPLAY_PROPERTIES']['LINK_TEXT']['VALUE'];?></a>
                        <?endif;?>
                    </div>
                    <div class="w69b-screencastify-mouse"></div>
                 </div>
             </div>
        </div>
	</div>
<?endforeach;?>

</div>