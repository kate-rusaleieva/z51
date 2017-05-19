<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$time = time() + (4*3600);

$timeNow = date($arParams["TEMPLATE_FOR_TIME"], $time);

foreach ($arParams["WORK_DAYS"] as $arParamsItem) {
    if($arParamsItem == date("w",$time)) {
        if ($arParams["START_WORK_DAY"] <= $timeNow && $arParams["END_WORK_DAY"] >= $timeNow) {
            $arResult["RESULT"] = $arParams["START_WORK_DAY"] ."-".$arParams["END_WORK_DAY"];
        } else {
            $arResult["RESULT"] = "Сейчас не работаем";
        }
        break;
    }else {
        $arResult["RESULT"] = "Сегодня не работаем";
    }
}

$this->IncludeComponentTemplate();

?>