<?php require_once "templates/header.php"; ?>
<?php require_once "templates/navbar.php"; ?>
<?php require_once "templates/slider.php"; ?>
<link rel="stylesheet" href="public/css/slider.css">
<main>
	<!--<section>
		<div class="slider">
		             <div id="img-container" class="images-container">
		             <img class="slider-item fade" src="public/img/slider.png" alt="">
		             <img class="slider-item fade" src="public/img/slider2.png" alt="">
		             <img class="slider-item fade" src="public/img/slider.png" alt="">
		             <img class="slider-item fade" src="public/img/slider2.png" alt="">
		         </div>
		         <div class="buttons-block">
		             <div id="prev-btn">&lt;</div>
		             <div id="next-btn">&gt;</div>
		         </div>
		         <div id="dots-block">
		             <button class="dot dot-active"></button>
		             <button class="dot"></button>
		             <button class="dot"></button>
		             <button class="dot"></button>
		         </div>
		     </div>
		
		</section>-->
	<section>
		<div class="main-text">
			<h2>Наша цель это не только доставить Вашу посылку
а  ещё доставить Вам удовольствие от работы с нами!</h2><br>
			<p>DWExpress - предлагает Вам услуги по международной перевозке 
мелких посылок и малогабаритных грузов с товарами
интернет-торговли.</p>
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
				<a href="profile.php"><div class="square" id="but4" tabindex="1">
					<span class="function-square">
					<img class="square-img" src="public/img/icons/икона4-05.svg">
					</span>
					<span class="square-text">Личный кабинет</span>
				</div></a>
			</div>
		</div>
	</section>
	<hr class="middle-line">
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
					<p>Отслеживайте трекер вашей <br>посылки, будьте в курсе ее <br> передвижения</p>
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
	<button class="oform"><a href="oform.php">Оформить заказ</a></button></div>
	
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
<link rel="stylesheet" href="public/css/find.css">
<div id="myModal1" class="modal">
	<div class="modal-content1">
		<div><span class="close" data-modal="myModal1">&times;</span></div>
		<input type="text" name="name1" id="na1" placeholder="Введите ваш трекинг номер" title="Ваше имя">
		<img src="public/img/icons/икона1-05.svg" alt="" class="logo1">
		<img src="public/img/icons/lupa.svg" alt="" class="logo2">
		<p></p>
	</div>
</div>
<link rel="stylesheet" href="public/css/characteristic.css">
<div id="myModal2" class="modal">
	<div class="modal-content2">
		<div><span class="close" data-modal="myModal2">&times;</span></div>
		<input type="text" name="name" placeholder="Откуда" title="Ваше имя" class="input1">
		<input type="text" name="name" placeholder="Куда" title="Ваше имя" class="input1">
		<input type="text" name="name" placeholder="Вес" title="Ваше имя" class="input2" id="scale">
		<input type="text" placeholder="Услуги" class="input2" id="block2">
		<input type="text" placeholder="Объявленная стоимость" class="input3">
		<p>
			<button class="b-but2">Рассчитать</button><br>
		</p>
		<input type="text" placeholder="Общая сумма" class="input4">
	</div>
</div>
<link rel="stylesheet" href="public/css/phone.css">
<div id="myModal3" class="modal">
	<div class="modal-content3">
		<div><span class="close" data-modal="myModal3">&times;</span></div>
		<input type="text" name="name" id="third1" placeholder="Ваше имя" title="Ваше имя">
		<input type="text" name="name" id="third2" placeholder="Номер телефона" title="Номер телефона">
		<input type="text" name="name" id="third3" placeholder="Электронный ящик" title="Электронный ящик">
		<input type="text" name="name" id="third4" placeholder="Примечание" title="Примечание">
		<p>
			<button class="b-but3" type="submit">Отправить</button>
		</p>
	</div>
</div>
<script type="text/javascript" src="public/js/modal.js"></script>
<?php require_once "templates/footer.php"; ?>
<a href="#"></a>