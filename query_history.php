<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>История запросов</title>

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
	<div class="n-content">
		<div class="n-content-inner">
			<div class="my-container">	
				<div class="df-history">
					<div class="df-toptext">
						<span class="df-his">История запросов</span>
						<div class="df-show-in">
							<span>Выводить по</span> 
							<a href="#" class="active">10</a>
							<a href="#">25</a>
							<a href="#">50</a>
							<span>результатов</span>
						</div>
						<div class="clear"></div>
					</div>
					<table class="df-table">
						<tr class="df-topcaption">
							<td class="hidden-xs">Наименование для поиска</td>
							<td class="hidden-xs">Дата поиска</td>
							<td>Код ТН ВЭД и ставка</td>
							<td>Описание кода</td>
						</tr>
						<tr class="df-text-blocks">
							<td class="df1 hidden-xs hidden-xs">ткань хлопчатобумажная</td>
							<td class="df2 hidden-xs">21.11.2016</td>

							<td class="df3">  
								<span>Код ТН ВЭД ЕАЭС - <em>7546781713</em></span><br>
								<span>Рейтинг –<em>46,13%</em></span><br>
								<span>Ставка – <em>10, но не менее 1,88 евро за кг</em></span><br>
								<span>Единица измерения:<em>шт</em></span><br>
								<a href="#">Отслеживать код</a>
							</td>

							<td class="df4">
								<span><em>Раздел XI </em> – Текстильные материалы и текстильные изделия</span><br>
								<em>Группа 62</em><br>
								<span>Предметы одежды и принадлежности к одежде, кроме трикотажных машинного
									или ручного вязания</span><br>
									<span>Костюмы, комплекты, жакеты, блайзеры, платья, юбки, юбки-брюки, брюки,
										комбинезоны с нагрудниками и лямками, бриджи и шорты
										(кроме купальных) женские или для девочек:</span><br>
										<span>- - из хлопчатобумажной пряжи: </span><br>
										<span>- - - - - из денима или джинсовой ткани</span>
									</td>
								</tr>					
								<tr class="df-text-blocks">
									<td class="df1 hidden-xs">ткань хлопчатобумажная</td>
									<td class="df2 hidden-xs">21.11.2016</td>

									<td class="df3">  
										<span>Код ТН ВЭД ЕАЭС - <em>7546781713</em></span><br>
										<span>Рейтинг –<em>46,13%</em></span><br>
										<span>Ставка – <em>10, но не менее 1,88 евро за кг</em></span><br>
										<span>Единица измерения:<em>шт</em></span><br>
										<a href="#">Отслеживать код</a>
									</td>

									<td class="df4">
										<span><em>Раздел XI </em> – Текстильные материалы и текстильные изделия</span><br>
										<em>Группа 62</em><br>
										<span>Предметы одежды и принадлежности к одежде, кроме трикотажных машинного
											или ручного вязания</span><br>
											<span>Костюмы, комплекты, жакеты, блайзеры, платья, юбки, юбки-брюки, брюки,
												комбинезоны с нагрудниками и лямками, бриджи и шорты
												(кроме купальных) женские или для девочек:</span><br>
												<span>- - из хлопчатобумажной пряжи: </span><br>
												<span>- - - - - из денима или джинсовой ткани</span>
											</td>
										</tr>					
										<tr class="df-text-blocks">
											<td class="df1 hidden-xs">ткань хлопчатобумажная</td>
											<td class="df2 hidden-xs">21.11.2016</td>

											<td class="df3">  
												<span>Код ТН ВЭД ЕАЭС - <em>7546781713</em></span><br>
												<span>Рейтинг –<em>46,13%</em></span><br>
												<span>Ставка – <em>10, но не менее 1,88 евро за кг</em></span><br>
												<span>Единица измерения:<em>шт</em></span><br>
												<a href="#">Отслеживать код</a>
											</td>

											<td class="df4">
												<span><em>Раздел XI </em> – Текстильные материалы и текстильные изделия</span><br>
												<em>Группа 62</em><br>
												<span>Предметы одежды и принадлежности к одежде, кроме трикотажных машинного
													или ручного вязания</span><br>
													<span>Костюмы, комплекты, жакеты, блайзеры, платья, юбки, юбки-брюки, брюки,
														комбинезоны с нагрудниками и лямками, бриджи и шорты
														(кроме купальных) женские или для девочек:</span><br>
														<span>- - из хлопчатобумажной пряжи: </span><br>
														<span>- - - - - из денима или джинсовой ткани</span>
													</td>
												</tr>
											</table>
											<div class="df-bottomtext">
												<div class="df-show-in">
													<span>Страница</span> 
													<a href="#" class="active">1</a>
													<a href="#">2</a>
													<a href="#">3</a>
													<span>...</span>
													<a href="#">97</a>
												</div>
												<span class="df-warning">Внимание! В истории запросов хранятся результаты за 3 месяца.</span>
											</div>
											<div class="clear"></div>
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

