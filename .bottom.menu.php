<?
$aMenuLinksOrigin = $aMenuLinks;

include $_SERVER['DOCUMENT_ROOT'] . '/services/.left.menu.php';

$aMenuLinksExt = $aMenuLinks;

$aMenuLinks = array_merge($aMenuLinksOrigin, $aMenuLinksExt);