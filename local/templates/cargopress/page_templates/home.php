<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<!-- JUMBOTRON -->
		<div class="jumbotron jumbotron--with-captions">
			
			<div data-interval="5000" data-ride="carousel" id="headerCarousel" class="carousel slide">
 
				<div class="carousel-inner">
					
					<div class="item">
						<img alt=""  src="<?=SITE_TEMPLATE_PATH?>/images/placeholders/1920x600.png">
						<div class="container">
							<div class="jumbotron-content">
								<div class="jumbotron-content__description">
									<div class="p1">
										<span class="s1">Текст анонса.</span>
									</div>
									<div>
										<a target="_self" href="<?=SITE_TEMPLATE_PATH?>/services.html" class="btn btn-primary">Наши услуги</a>
									</div>
									<div class="w69b-screencastify-mouse"></div>
								</div>
							</div>
						</div>
					</div><!-- /.item -->
					
					<div class="item">
						<img alt="" src="<?=SITE_TEMPLATE_PATH?>/images/placeholders/1920x600.png">
						<div class="container">
							<div class="jumbotron-content">
								<div class="jumbotron-content__description">
									<div class="p1">
										<span class="s1">Текст анонса.</span>
									</div>
									<a target="_self" href="<?=SITE_TEMPLATE_PATH?>/about.html" class="btn btn-primary">Читать далее</a>
									<div class="w69b-screencastify-mouse"></div>
								</div>
							</div>
						</div>
					</div><!-- /.item -->
					
					<div class="item active">
						<img alt="" src="<?=SITE_TEMPLATE_PATH?>/images/placeholders/1920x600.png">
						<div class="container">
							<div class="jumbotron-content">
								<div class="jumbotron-content__description">
									<div class="p1">
										<span class="s1">Текст анонса.</span>
									</div>
									<a target="_self" href="<?=SITE_TEMPLATE_PATH?>/about.html" class="btn btn-primary">Подробнее</a>
									<div class="w69b-screencastify-mouse"></div>
								</div>
							</div>
						</div>
					</div><!-- /.item -->
					
				</div><!-- /.carousel-inner -->
			
				<div class="container">
 
					<a data-slide="prev" role="button" href="#headerCarousel" class="left jumbotron__control">
						<i class="fa  fa-caret-left"></i>
					</a>
					<a data-slide="next" role="button" href="#headerCarousel" class="right jumbotron__control">
						<i class="fa  fa-caret-right"></i>
					</a>
				</div><!-- /.container -->
				
			</div><!-- /.carousel -->
			
		</div><!-- /.jumbotron -->

<!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>