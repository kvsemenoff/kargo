<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Обработка</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
		new WOW().init();
	</script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<div class="n-wrapper">
		<div class="n-header">
			<section class="dd-header-processing">
				<div class="main-container">
					<div class="dd-logo">
						<a href="#"><img src="img/proc-logo.png"></a>
					</div>
					<div class="dd-main-menu hidden-xs hidden-sm
					">
					<ul>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Подбор кода</a></li>
						<li><a href="#">История запросов</a></li>
						<li><a href="#">Отслеживание кодов</a></li>
						<li><a href="#">Обработка Excel</a></li>
					</ul>
					<div class="dd-log-info">
						<span>Логин: <span> testuser</span></span>
						<span class="dd-pleft">Остаток: <span> 12 дней</span></span>
						<a class="dd-pleft" href="#">Продлить КаргоКод</a>
					</div>
				</div>
				<div class="dd-log-in">
					<a href="#">Профиль</a>
					<a href="#">Выйти</a>
				</div>
				<div class="clearfix"></div>
			</section>
		</div>
		<div class="n-content">
			<div class="n-content-inner">
				<section class="dd-header-processing">
					<div class="main-container">
						<div class="dd-obrabotka-wrap">
							<div class="dd-title">
								<span>Обработка файлов Excel</span>
							</div>
							<div class="dd-bg">
								<form class="dd-form">
									<div class="dd-name">
										<span>Загрузите файл Excel:</span>
									</div>
									<div class="dd-input">
										<input class="input-class" type="text" name="">
										<input class="dd-submit" type="submit" value="Обзор..." name="">
									</div>
									<div class="dd-butt">
										<a class="button1" href="#">Обработать файл</a>
									</div>
								</form>	
							</div>
							<div class="dd-result">
								<span>21.11.2016 18:17  Файл загружен...</span>
								<span>21.11.2016 18:17  Проверка корректности формата файла...</span>
								<span>21.11.2016 18:17  Файл поставлен в очередь на обработку...</span>
								<span>21.11.2016 18:18  Файл обрабатывается....</span>
								<span class="dd-c-w">21.11.2016 18:19  <span class="dd-c">Файл обработан.</span></span>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

<div class="anz-menu">
	<input type="checkbox" id="check_1" class=""/>
	<label class="anz-menu-ch hidden-lg hidden-md" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><img src="img/menu-ico.png"></label>
	<div class="anz-perspective">
		<div class="menu-list-pressed">
			<label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i><img src="img/kres.png"></label>
			<ul class="dd-mainmenu">
				<li><a href="#">Главная</a></li>
				<li><a href="#">Подбор кода</a></li>
				<li><a href="#">История запросов</a></li>
				<li><a href="#">Отслеживание кодов</a></li>
				<li><a href="#">Обработка Excel</a></li>
			</ul>
			<div class="dd-log-info2">
				<span>Логин: <span> testuser</span></span>
				<span >Остаток: <span> 12 дней</span></span>
				<a href="#">Продлить КаргоКод</a>
			</div>
		</div>
	</div>
</div>
		<div class="n-footer">
			<?php require_once('includes/footer-processing.php'); ?>
		</div>
		
	</div>
	



	
</body>
</html>

