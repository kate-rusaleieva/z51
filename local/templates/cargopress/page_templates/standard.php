<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<!-- MAIN TITLE -->
		<div class="main-title">
			<div class="container">
				<h1 class="main-title__primary">
					Заголовок
				</h1>
			</div>
		</div><!-- /.main-title -->
		
		<!-- BREADCRUMBS -->
		<div class="breadcrumbs">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
                "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1",
                ),
                false
            );?>
		</div><!-- /.breadcrumbs -->
		
		<div class="container">
			
			<div class="row margin-bottom-60 hentry">
				
				<div>
					
					<p>Текст страницы...</p>		
					
				</div><!-- /.col -->
				
			</div><!-- /.row -->
			
		</div><!-- /.container -->

<!-- --><!-- -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>