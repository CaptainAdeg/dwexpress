<?php require_once "templates/header.php"; ?>
<?php require_once "templates/navbar.php"; ?>
<?php require_once "templates/slider.php"; ?>
<link rel="stylesheet" href="public/css/slider.css">
<main>
	<section>

		<!--====Для мобилки====-->
	<div class="window">
		<div class="mob-banner">
			<div class="mob-banner-item">
				<div class="banner-item__text"><p>Доставка посылок из Китая в Казахстан и Россию</p></div>
				<button class="banner-item__button"><a href="oform2.php">Оформить заказ</a></button>
			</div>
		</div>
	</div>

	
<script type="text/javascript" src="public/js/mob.js"></script>

		<div class="main-text">
			<h2>Наша цель это не только доставить Вашу посылку а ещё доставить Вам удовольствие от работы с нами!</h2>
			<br>
			<p>DWExpress - предлагает Вам услуги по международной перевозке мелких посылок и малогабаритных грузов с товарами интернет-торговли.</p>
		<hr class="middle-line">
		</div>

		<div class="function">
			<div class="function-line">
				<button class="square" id="but1" data-modal="myModal1">
				<span class="function-square">
				<img class="square-img" src="public/img/icons/икона1-05.svg">
				</span>
				<span class="square-text">Отслеживание</span>
				</button>
				<button class="square" id="but2" data-modal="myModal2">
				<span class="function-square">
				<img class="square-img" src="public/img/icons/икона2-05.svg">
				</span>
				<span class="square-text">Рассчитать стоимость</span>
				</button>
				<button class="square" id="but3" data-modal="myModal3">
				<span class="function-square">
				<img class="square-img" src="public/img/icons/икона3-05.svg">
				</span>
				<span class="square-text">Обратный звонок</span>
				</button>
				<a href="profile.php" id="button4href"><div class="square" id="but4" tabindex="1">
					<span class="function-square">
					<img class="square-img" src="public/img/icons/икона4-05.svg">
					</span>
					<span class="square-text">Личный кабинет</span>
				</div></a>
			</div>
		</div>
	</section>
	<hr class="middle-line">
	
	<!--==Для мобилки-->
	<div class="mob-text">
			<h2>Наша цель это не только доставить Вашу посылку а ещё доставить Вам удовольствие от работы с нами!</h2>
			<br>
			<p>DWExpress - предлагает Вам услуги по международной перевозке мелких посылок и малогабаритных грузов с товарами интернет-торговли.</p>
	</div>		
	<!--Для Мобилки==-->



	<h1 class="middle-text">Работая с нами вы получаете</h1>
	<section>
		<div class="info">
			<div class="info-line">
				<div class="monitor">
					<span class="info-monitor"><img class="monitor-img" src="public/img/icons/Practice.svg" style="position: relative; left: 13px;"></span>
					<span class="monitor-text">Практичность</span>
					<p>Для вашего удобства мы <br>принимаем заказы без <br> выходных</p>
				</div>
				<div class="monitor">
					<span class="info-monitor">
					<img class="monitor-img" src="public/img/icons/Trust.svg">
					</span>
					<span class="monitor-text" style="position: relative; bottom: 40px;">Надежность</span>
					<p>Доставим посылки в <br> полной целостности и <br> сохранности </p>
				</div>
				<div class="monitor">
					<span class="info-monitor">
					<img class="monitor-img" src="public/img/icons/Find.svg">
					</span>
					<span class="monitor-text">Отслеживание</span>
					<p>Отслеживайте трекер вашей посылки, будьте в курсе ее  передвижения</p>
				</div>
			</div>
		</div>
		</div>
		</div><br>
	</section>
	<div class="last-page"><p class="banner-text">Большой опыт работы в логистике, отлаженные схемы оказания
		услуг и надежные ресурсы, позволяют нам быстро и 
		качественно доставить Ваши посылки!
	</p>
	<button class="oform"><a href="oform2.php">Оформить заказ</a></button></div>
	
	<!--<hr class="line-through-page">
		<div class="extra-page">
			<p>Начать отправлять просто</p>
			<div class="rectangle">
				<div class="block"><span>1</span><p>Рассчитайте<br>стоимость</p></div>
				<div class="block"><span>2</span><p>Вызовите<br>
		курьера</p></div>
				<div class="block"><span>3</span><p>Подготовьте<br>
		отправку</p></div>
			</div>
			<hr class="last">
		</div>-->
	<div class="banner">
		<img src="public/img/banner.svg" class="banner-image">
	</div>
</main>
<?php require_once "modal/modal.php"; ?>
<?php require_once "templates/footer.php"; ?>
<img onclick="location.href = '#'" src="public/img/toTop.png" class="toTop">