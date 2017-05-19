<script>alert("OK")</script>
<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    if( !empty($_REQUEST['name']) and !empty($_REQUEST['description']) ) {

        if (CModule::IncludeModule('iblock')) {

            $el = new CIBlockElement;

            $PROP = array();
            $PROP['NAME'] = $_POST['name'];
            $PROP['EMAIL'] = $_POST['email'];
            $PROP['PHONE'] = $_POST['phone'];
            $PROP['QUESTION'] = $_POST['question'];

            $iblock_id = 1;
            $section_id = false;
            if ($_POST['section_id'] > 0) {
                $section_id = $_POST['section_id'];
            }

            $arFields = Array(
                "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
                "CREATED_BY" => $GLOBALS['USER']->GetID(),    //Передаем ID пользователя кто добавляет
                "IBLOCK_SECTION_ID" => $section_id, //ID раздела ели есть
                "IBLOCK_ID" => $iblock_id, //ID информационного блока
                "PROPERTY_VALUES" => $PROP, // Передаем массив значении для свойств
                "NAME" => strip_tags($_REQUEST['name']),
                "ACTIVE" => "Y", //поумолчанию делаем активным или ставим N для отключении поумолчанию
                "PREVIEW_TEXT" => mb_substr(strip_tags($_REQUEST['description']), 0, 100), //отрезаем лишнее и ограничиваем до 100 символов
                "DETAIL_TEXT" => strip_tags($_REQUEST['description'], '<br></br><p>') //отрезаем лишнее
            );

            if ($ID = $el->Add($arFields)) {
                $result['status'] = 'success';
                $result['message'] = 'Элемент успешно добавлена';
            } else {
                $result['status'] = 'error';
                $result['message'] = $el->LAST_ERROR;
            }
         } else {
            $result['status'] = 'error';
            $result['message'] = 'Модуль не подключен';
        }

    } else {
        $result['status'] = 'error';
        $result['message'] = 'Все поля обязательны для заполнения';
    }

    echo json_encode($result);
}
