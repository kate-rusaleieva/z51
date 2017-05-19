<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "WORK_DAYS" => array(
            "PARENT" => "BASE",
            "NAME" => "Рабочие дни недели",
            "TYPE" => "LIST",
            "MULTIPLE" => "Y",
            "VALUES" => array(
                "1" => "Понедельник",
                "2" => "Вторник",
                "3" => "Среда",
                "4" => "Четверг",
                "5" => "Пятница",
                "6" => "Суббота",
                "7" => "Воскресенье"
            ),
            "ADDITIONAL_VALUES" =>  "N",
            "SIZE" => "7"
        ),
        "TEMPLATE_FOR_TIME" => array(
            "PARENT" => "BASE",
            "NAME" => "Формат времени",
            "TYPE" => "LIST",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" =>  "N",
            "VALUES" => array(
                "H:i" => "00:00",
                "G:i" => "0:00",
            ),
            "DEFAULT" => "H:i",
            "REFRESH" => "Y"
        ),
        "START_WORK_DAY" => array(
            "PARENT" => "BASE",
            "NAME" => "Начало рабочего дня",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => ""

        ),
        "END_WORK_DAY" => array(
            "PARENT" => "BASE",
            "NAME" => "Конец рабочего дня",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => ""
        )
    ),
);
?>