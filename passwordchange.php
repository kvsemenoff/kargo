<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Смена пароля</title>

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
			<div class="main-container">
				<section class="dd-header-processing df-minheight">
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
				</div>
			</section>
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
			<div class="dd-log-info dd-log-info2">
				<span>Логин: <span> testuser</span></span></br>
				<span >Остаток: <span> 12 дней</span></span></br>
				<a href="#">Продлить КаргоКод</a>
			</div>
		</div>
	</div>
</div>
	</div>
	<div class="n-content">
		<div class="n-content-inner vertical-align">
			<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="df-password-change">				
					
					<div class="df-caption-top">Смена пароля пользователя <span>testuser</span></div>
					<div class="df-bg-color">
						<div class="df-inputs">
							<span>Введите новый пароль:</span>
							<input type="password" placeholder="********" class="input-class">
						</div>
						<div class="df-inputs">
							<span>Подтвердите новый пароль:</span>
							<input type="password" placeholder="********" class="input-class df2">
						</div>
						<div class="df-buttons">
							<a href="#" class="button1">
								Изменить пароль
							</a>
							<a href="#" class="button1 df-but">
								Отменить
							</a>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>

	<div class="n-footer">
		<?php require_once('includes/footer.php'); ?>
	</div>
</div>

</body>
</html>

