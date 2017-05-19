<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?$APPLICATION->ShowTitle()?> | CargoPress</title>
    <?$APPLICATION->ShowHead()?>

    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/magnific-popup.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-2.1.4.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/modernizr.custom.24530.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap/carousel.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap/transition.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap/button.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap/collapse.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap/validator.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap/modal.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.maskedinput.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/underscore.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/SimpleMap.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/NumberCounter.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");
    ?>

</head>
<body>
	
	<?$APPLICATION->ShowPanel();?> 
	<!-- MAIN PAGE CONTAINER -->
	<div class="boxed-container">
		
		<!-- HEADER -->
		<div class="header__container">
			
			<div class="container">
				
				<header class="header">
					
					<div class="header__logo">
						<a href="index.php">
							<img class="img-responsive" srcset="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="CargoPress" src="images/logo.png">
						</a>
						<button data-target="#cargopress-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
							<span class="navbar-toggle__text">Меню</span>
							<span class="navbar-toggle__icon-bar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</span>
						</button>
					</div><!-- /.header__logo -->
					
					<div class="header__navigation">
                        <nav class="collapse navbar-collapse" id="cargopress-navbar-collapse">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "horizontal_multilevel_silver",
                                array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MAX_LEVEL" => "2",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                        0 => "SECTION_ID",
                                        1 => "page",
                                        2 => "",
                                    ),
                                    "COMPONENT_TEMPLATE" => "horizontal_multilevel_silver",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            );?>
                        </nav>
					</div><!-- /.header__navigation -->
					
					<div class="header__widgets">
						
						<div class="widget-icon-box">
							
							<div class="icon-box">	
								<i class="fa fa-headphones"></i>
								<h4 class="icon-box__title">Телефон</h4>
								<span class="icon-box__subtitle">
									<?$APPLICATION->IncludeFile(
										$APPLICATION->GetTemplatePath("include_areas/phone.php"),
										Array(),
										Array("MODE"=>"html")
									);?>
								</span>
							</div>
						
						</div>
						
						<div class="widget-icon-box">
							
							<div class="icon-box">	
								<i class="fa fa-clock-o"></i>
								<h4 class="icon-box__title">Время работы</h4>
								<span class="icon-box__subtitle">
									<? $APPLICATION->IncludeComponent(
                                        "main:dv",
                                        ".default",
                                        array(
                                            "COMPONENT_TEMPLATE" => ".default",
                                            "TEMPLATE_FOR_DATE" => "Y-m-d",
                                            "TEMPLATE_FOR_START_DATE" => "09",
                                            "TEMPLATE_FOR_END_DATE" => "00",
                                            "WORK_DAYS" => array(
                                                0 => "1",
                                                1 => "2",
                                                2 => "3",
                                                3 => "4",
                                                4 => "5",
                                            ),
                                            "START_WORK_DAY" => "08:00",
                                            "END_WORK_DAY" => "18:00",
                                            "TEMPLATE_FOR_TIME" => "H:i"
                                        ),
                                        false
                                    );?>
								</span>
							</div>
						
						</div>
					
						<div class="widget-icon-box">
							
							<div class="icon-box">
								<i class="fa fa-envelope-o"></i>
								<h4 class="icon-box__title">Email</h4>
								<span class="icon-box__subtitle">
									<?$APPLICATION->IncludeFile(
										$APPLICATION->GetTemplatePath("include_areas/email.php"),
										Array(),
										Array("MODE"=>"html")
									);?>
								</span>
							</div>
							
						</div>
					
						<a target="_self" class="btn btn-info" id="button_requestQuote"  data-toggle="modal" data-target="#myModal">Задать вопрос</a>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Задать вопрос</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="message"></div>
                                        <form action="" method="POST">
                                            <input type="text" class="modal-body__name" required placeholder="Имя">
                                            <input type="email" class="modal-body__email" required placeholder="Электронная почта">
                                            <input type="text" class="modal-body__phone" placeholder="Телефон">
                                            <textarea class="modal-body__question" required placeholder="Текст вопроса"></textarea>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                            <button type="submit" class="btn btn-primary">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
				
					</div><!-- /.header__widgets -->
				
					<div class="header__navigation-widgets">
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-facebook"></i></a>
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-twitter"></i></a>
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-wordpress"></i></a>
						<a target="_blank" href="#" class="social-icons__link"><i class="fa fa-youtube"></i></a>
					</div>
			
				</header>
			
			</div><!-- /.container -->
		
		</div><!-- /.header__container -->

