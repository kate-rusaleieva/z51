<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<!-- MAIN TITLE -->
		<div class="main-title">
			<div class="container">
				<h1 class="main-title__primary">Заголовок</h1>
			</div>
		</div><!-- /.main-title -->

        <!-- BREADCRUMBS -->
        <div class="breadcrumbs">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            ),
                false
            );?>
        </div><!-- /.breadcrumbs -->
		
		<div class="container">
			
			<div class="row">
				
				<main class="col-xs-12 col-md-9 col-md-push-3">
					
					<p>Текст страницы...</p>
							
				</main><!-- /.col -->
				
				<div class="col-xs-12 col-md-3 col-md-pull-9">
					
					<div class="sidebar widget_nav_menu">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", Array(
							"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
								"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"MENU_CACHE_TYPE" => "A",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
									0 => "SECTION_ID",
									1 => "page",
									2 => "",
								),
								"COMPONENT_TEMPLATE" => "left",
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							),
							false
						);?>
					</div><!-- /.sidebar -->
					
				</div><!-- /.col -->
				
			</div><!-- /.row -->
			
		</div><!-- /.container -->

<!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>