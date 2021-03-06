<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
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
			<div class="dd-header dd-header-pass-remember">
				<div class="main-container">
					<div class="dd-logo">
						<a href="#"><img src="img/proc-logo.png"></a>
					</div>
					<div class="dd-main-menu hidden-xs hidden-sm">
						<ul>
							<li><a href="#">Что такое карго код?</a></li>
							<li><a href="#">Кому нужен карго код?</a></li>
							<li><a href="#">Возможности</a></li>
							<li><a href="#">Стоимость</a></li>
						</ul>
					</div>
					<div class="dd-log-in">
						<a href="#">Регистрация</a>
						<a href="#">Войти</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="anz-menu">
			<input type="checkbox" id="check_1" class=""/>
			<label class="anz-menu-ch hidden-lg hidden-md" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><img src="img/menu-ico.png"></label>
			<div class="anz-perspective">
				<div class="menu-list-pressed">
					<label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i><img src="img/kres.png"></label>
					<ul class="dd-mainmenu">
						<li><a href="#">Что такое карго код?</a></li>
						<li><a href="#">Кому нужен карго код?</a></li>
						<li><a href="#">Возможности</a></li>
						<li><a href="#">Стоимость</a></li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		

		<div class="n-content">
			<div class="n-content-inner vertical-align">
				<div class="container">
					<div class="dd-remember-wrap dd-autoriz">
						<span>Авторизация пользователя</span>
						<div class="dd-forma">
							<form action="#">
								<div class="dd-table">
									<span class="dd-unset">Логин</span>
									<input class="input-class" type="text" name="">
									<span class="dd-pass">Пароль</span>
									<input class="input-class" type="text" name="">
								</div>
								<div class="dd-chek-autorization">
									<label class="dd-chek-lable">
										<input class="checkbox" type="checkbox" name="checkbox-test" checked>
										<span class="checkbox-custom"></span>
										<span class="label">Запомнить меня</span>
									</label>
									<div class="dd-rem-the-pass-but">
										<a href="#">Вспомнить пароль</a>
									</div>
								</div>
								<div class="dd-r-but">
									<a class="button1 dd-button2 dd-button3" href="#">Войти в личный кабинет</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div class="n-footer">
			<div class="dd-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="footer-logo">
								<div class="dd-img">
									<img src="img/foot-l.png">
								</div>
								<div class="dd-logo-txt">
									<span>Быстрый подбор кода <span>Тн Вэд Еаэс</span></span>
								</div>
							</div>
							<div class="dd-footer-txt dd-footer-txt2">
								<ul>
									<li><a href="#">Что такое КаргоКод?</a></li>
									<li><a href="#">Кому нужен КаргоКод</a></li>
								</ul>
							</div>
							<div class="dd-footer-txt">
								<ul>
									<li><a href="#">Возможности</a></li>
									<li><a href="#">Стоимость</a></li>
								</ul>
							</div>
						</div>	
						<div class="col-md-4">
							<div class="dd-log-in">
								<a href="#">Регистрация</a>
								<a href="#">Личный кабинет</a>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12">
							<div class="dd-oferta">
								<a href="#">Договор-оферта</a>
								<a href="#">Обратная связь</a>
							</div>
						</div>
						<div class="clearfix"></div>			
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

