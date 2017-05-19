<?

function getCopyrightYearRange($startYear)
{
	$now = date("Y");
	if($startYear == $now){
		echo $startYear;
	}else{
		echo $startYear."&ndash;".$now;
	}

}

AddEventHandler("iblock", "OnAfterIBlockElementUpdate", Array("UpdateQuestion", "OnAfterIBlockElementUpdateHandler"));

class UpdateQuestion
{

    function OnAfterIBlockElementUpdateHandler($arFields)
    {
        if ($arFields["IBLOCK_ID"] == "1"){
           if(($arFields["ANSWER"] != " ") && ($arFields["ACTIVE"] == "Y")){
                $db_props = CIBlockElement::GetProperty($arFields["IBLOCK_ID"], $arFields["ID"], "sort", "asc", array());
                $PROPS = array();
                while($ar_props = $db_props->Fetch())
                $PROPS[$ar_props['CODE']] = $ar_props['VALUE'];

               $arSend = array(
                   "DEFAULT_EMAIL_FROM" => COption::GetOptionString("main", "email_from"),
                   "NAME_USER" =>  $PROPS['NAME'],
                   "EMAIL" =>  $PROPS['EMAIL'],
                   "QUESTION" =>  $PROPS["QUESTION"],
                   "ANSWER" =>  $PROPS["ANSWER"]
               );
               CEvent::Send('ANSWER_QUESTION',"s1", $arSend);
           }
        }
    }
}

?>