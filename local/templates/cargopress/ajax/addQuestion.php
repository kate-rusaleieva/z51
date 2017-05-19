<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (CModule::IncludeModule('iblock')) {

    $el = new CIBlockElement;

    $iblock_id = 1;
    $section_id = false;
    if ($_POST['section_id'] > 0) {
        $section_id = $_POST['section_id'];
    }

    $arFields = Array(
        "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания*/
        "NAME" =>  $_POST['name'],
        "MODIFIED_BY" => $USER->GetID(),    //Передаем ID пользователя кто добавляет
        "IBLOCK_SECTION_ID" => $section_id, //ID раздела если есть
        "IBLOCK_ID" => $iblock_id, //ID информационного блока
        "PROPERTY_VALUES" => array(
            "NAME" => $_POST['name'],
            "EMAIL" => $_POST['email'],
            "PHONE" => $_POST['phone'],
            "QUESTION" => $_POST['question']
        ), // Передаем массив значений для свойств
        "ACTIVE" => "N", //поумолчанию делаем активным или ставим N для отключении поумолчанию
    );

    if ($ID = $el->Add($arFields)) {
        $arSend = array(
            "DEFAULT_EMAIL_FROM" => COption::GetOptionString("main", "email_from"),
            "NAME" => $_POST['name'],
            "EMAIL" => $_POST['email'],
            "PHONE" => $_POST['phone'],
            "QUESTION" => $_POST['question'],
            "SITE_NAME" => "s1",
            "ID" => $ID
            );

        if(CEvent::Send('NEW_QUESTION',"s1", $arSend)){
            $result['status'] = 'success';
            $result['message'] = 'Вопрос успешно отправлен';
        }

      /*  $result['status'] = 'success';
        $result['message'] = 'Вопрос успешно отправлен';*/

    } else {
        $result['status'] = 'error';
        $result['message'] = $el->LAST_ERROR;
    }
 } else {
    $result['status'] = 'error';
    $result['message'] = 'Модуль не подключен';
}


echo json_encode($result);

?>
