<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

IncludeTemplateLangFile(__FILE__);

$TEMPLATE["standard.php"] = Array("name"=>GetMessage("standart"), "sort"=>1);
$TEMPLATE["page_leftMenu.php"] = Array("С левой колонкой"=>GetMessage("page_leftMenu"), "sort"=>2);
$TEMPLATE["home.php"] = Array("Главная"=>GetMessage("home"), "sort"=>3);
?>