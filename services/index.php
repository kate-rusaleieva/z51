<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");?><!-- MAIN TITLE -->
<div class="main-title">
	<div class="container">
		<h1 class="main-title__primary">Услуги</h1>
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
	<div class="row">
 <main class="col-xs-12 col-md-9 col-md-push-3">
		<p>
			Текст страницы...
		</p>
 </main><!-- /.col -->
		<div class="col-xs-12 col-md-3 col-md-pull-9">
			<div class="sidebar widget_nav_menu">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(0=>"SECTION_ID",1=>"page",2=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	)
);?>
			</div>
			<!-- /.sidebar -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->
<!-- --><!-- --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>