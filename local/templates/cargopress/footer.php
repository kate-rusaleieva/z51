
<!-- FOOTER -->
		<footer class="footer">
			
			<div class="footer-top">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-xs-12 col-md-4">
							
							<p>
								<img alt="logo-footer" src="<?=SITE_TEMPLATE_PATH?>/images/logo-footer.png" class="logo">
							</p>
							<p>
								<?$APPLICATION->IncludeFile(
									$APPLICATION->GetTemplatePath("include_areas/text.php"),
									Array(),
									Array("MODE"=>"html")
								);?>
							</p>
							<p>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-facebook"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-twitter"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-wordpress"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-youtube-play"></span>
								</a>
							</p>
							
						</div><!-- /.row -->
						
						<div class="col-xs-12 col-md-2">
							
							<div class="widget_nav_menu">
								
								<h6 class="footer-top__headings">Услуги</h6>

                                <?$APPLICATION->IncludeComponent("bitrix:menu", "vertical_buttom_menu", Array(
                                    "ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
                                        "MAX_LEVEL" => "2",	// Уровень вложенности меню
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
                                        "COMPONENT_TEMPLATE" => "horizontal_multilevel_silver",
                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                    ),
                                    false
                                );?>
								
							</div><!-- /.widget_nav_menu -->
							
						</div><!-- /.row -->						
						
					</div><!-- /.row -->
					
				</div><!-- /.footer -->
				
			</div><!-- /.footer-top -->
			
			<div class="footer-bottom">
				
				<div class="container">					

                    <div class="footer-bottom__right">
                        &copy;  <?=getCopyrightYearRange("2009");?> CargoPress. Все права защищены
                    </div>

				</div><!-- /.container -->
				
			</div><!-- /.footer-bottom -->
			
		</footer>
		
	</div><!-- /.boxed-container -->
</body>
</html>