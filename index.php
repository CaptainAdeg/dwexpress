<!DOCTYPE html>
<html>
<head>
	<title>Nachalot</title>
	</head>
<body>
<?php require_once "templates/header.php"; ?>
<main>
	<section>
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
</section>
		<section>

				<div class="function">
				<div class="function-line">
					<a href="#"><div class="square">
						<span class="function-square"><img class="square-img" src="public/img/icons/икона1-05.svg"></span>
						<span class="square-text">Отслеживание</span>
					</div>
					<a href="#"><div class="square">
						<span class="function-square"><img class="square-img" src="public/img/icons/икона2-05.svg"></span>
						<span class="square-text">Расчитать стоимость</span>
					</div></a>
					<a href="#"><div class="square">
						<span class="function-square"><img class="square-img" src="public/img/icons/икона3-05.svg"></span>
						<span class="square-text">Обратный звонок</span>
					</div></a>
					<a href="#"><div class="square">
						<span class="function-square"><img class="square-img" src="public/img/icons/икона4-05.svg"></span>
						<span class="square-text">Личный кабинет</span>
					</div></a>
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
						<p align="center">Для вашего удобства мы <br>принимаем заказы без <br> выходных</p>
						
					</div>
					<div class="monitor">
						<span class="info-monitor"><img class="monitor-img" src="public/img/icons/Trust.svg"></span>
						<span class="monitor-text" style="position: relative; bottom: 40px;">Надежность</span>
						<p align="center">Доставим посылки в <br> полной целостности и <br> сохранности </p> 
					</div>
					<div class="monitor">
						<span class="info-monitor"><img class="monitor-img" src="public/img/icons/Find.svg"></span>
						<span class="monitor-text" align="">Отслеживание</span>
						 <p>Отслеживайте трекер вашей посылки, будьте в курсе ее передвижения</p>
					</div>	
			</div>
		</div><br>
		</section>
		<p class="banner-text">Большой опыт работы в логистике, отлаженные схемы оказания
 услуг и надежные ресурсы, позволяют нам быстро и 
качественно доставить Ваши посылки!</p>
		<div class="banner">
			<img src="public/img/banner.svg" class="banner-image">
		</div>
		
	</main>
	
<?php require_once "templates/footer.php"; ?>
<a href="#">вверх страницы</a>
</body>
</html>