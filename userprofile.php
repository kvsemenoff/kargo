<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Профиль пользователя</title>

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

	
	<div class="df-for-footer">
		
		<section class="dd-header-processing de-header-processing">
			<div class="main-container">
				<div class="dd-logo">
					<a href="#"><img src="img/proc-logo.png"></a>
				</div>
				<div class="dd-main-menu hidden-xs hidden-sm">
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
				</div>
			</div>
		</div>


		<div class="userprofile">
			<div class="up-caption">
				<span class="caption">
					Профиль пользователя <span class="caption_green">testuser</span>
				</span>
			</div>
			<div class="up-form">
				<div class="ln1">
					<span class="label1">Логин:</span>
					<input class="input-class btn-for-label1" type="text" value="" placeholder="testuser">
				</div>
				<div class="ln2">
					<span class="label2">E-Mail:</span>
					<input class="input-class btn-for-label2" type="text" value="" placeholder="testuser@testuser.com">
				</div>
				<div class="ln3">
					<span class="label3">Телефон:</span>
					<input class="input-class btn-for-label3" type="text" value="" placeholder="+79261234567">
				</div>
				<div class="ln4">
					<span class="label4">Пароль:</span>
					<a href="#" class="chpass_link"><span class="chpass_caption">Сменить пароль</span></a>
				</div>
				<div class="ln5">

					<label>
						<input class="checkbox" type="checkbox" name="checkbox-test" checked>
						<span class="checkbox-custom"></span>
						<span class="label check_caption">Получать новости сервиса</span>
					</label>

				</div>
				<div class="ln6">
					<a href="#" class="button1 save">Сохранить</a>
					<a href="#" class="button1 cancel">Отменить</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="proof"></div>

	<section class="dd-footer de-footer">
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
							<li><a href="#">Главное</a></li>
							<li><a href="#">Поброр кода</a></li>
							<li><a href="#">История запросов</a></li>
						</ul>
					</div>
					<div class="dd-footer-txt">
						<ul>
							<li><a href="#">Отслеживание кодов</a></li>
							<li><a href="#">Обработка Exel</a></li>
						</ul>
					</div>
				</div>	
				<div class="col-md-4">
					<div class="dd-log-in de-log-in">
						<a href="#">Профиль</a>
						<a href="#">Выйти</a>
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
	</section>	
	
</body>
</html>