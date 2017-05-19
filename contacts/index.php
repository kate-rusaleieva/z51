<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h1 class="main-title__primary">
		Контакты</h1>
	</div>
</div>
<!-- /.main-title --> <!-- BREADCRUMBS -->
<div class="breadcrumbs">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
</div>
<!-- /.breadcrumbs -->
<div class="container">
	<div class="row margin-bottom-60 hentry">
		<div>
			<p>
				Текст страницы...
			</p>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->
<!-- --><!-- --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>