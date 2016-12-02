<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

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
		<section class="dd-header dd-header-pass-remember">
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
		</section>





		<section>
			<div class="container">
				<div class="dd-remember-wrap">
					<span>Восстановить пароль</span>
					<span>Для восстановления пароля укажите свой E-Mail. На указанную почту будет выслано письмо.</span>
					<div class="dd-forma">
						<form>
							<div class="dd-table">
								<span>Укажите email:</span>
								<input class="input-class" type="text" name="">
							</div>
							<div class="dd-r-but">
								<a class="button1" href="#">Восстановить пароль</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="proof"></div>


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
<?php require_once('includes/footer.php'); ?>
</body>
</html>

