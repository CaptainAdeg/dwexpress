<!DOCTYPE html>
<html>
<head>
	<title>about us</title>
</head>
<body>
	<style>
	.slider {
	display: block;
	position: relative;
	height: 470px;
	margin: 0 auto;
	margin-bottom: 100px;
	overflow: hidden;
}
.images-container {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	transition: 0.5s;
	
}
.images-container img {
	display: block;
	width: 100%;
	height: 100%;
	z-index: 1;
	
}
.buttons-block > div {
	color: #fff;
	cursor: pointer;
	position: absolute;
	top: 50%;
	font-size: 25px;
	z-index: 99;
}
#prev-btn {
	left: 5px;
}
#next-btn {
	right: 5px;
}
#dots-block {
	z-index: 100;
	display: flex;
	justify-content: center;
	position: absolute;
	bottom: 10px;
	left: 50%;
	transform: translateX(-50%);
}
.dot {
	width: 15px;
	margin-right: 7px;
	height: 15px;
	border: none;
	border-radius: 50%;
	background: #FFFFF;
	opacity: 0.4;
	cursor: pointer;
	outline: none;
}
.dot-active {
	background: #FFFFF;
}
	</style>
		<section>
			<div class="slider">
                <div id="img-container" class="images-container">
                <img class="slider-item fade" src="../public/img/slider.png" alt="">
                <img class="slider-item fade" src="../public/img/slider2.png" alt="">
                <img class="slider-item fade" src="../public/img/slider.png" alt="">
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
			<div class="address">
				<div class="address-info">
					<h2>Все контакты</h2><br>
					<p>8-777-777-77-77</p>
					<p>345-25-55</p><br>
					<p>Сатпаева 30а</p>
				</div>
				<div class="address-map">
					
				</div>
			</div>

			<div class="about_us">
				<h1>Наша деятельность</h1>
				<p class="description">Курьерская компания «DWExpress» работает на рынке
 					Казахстана c 1995 года. Мы имеем широко развитую сеть во всех странах
 					мира и предлагаем широкий спектр услуг, включающий в себя 
 					индивидуальные решения по транспортировке экспресс-пакетов и
 					мелкогабаритных грузов, по принципу «от двери до двери» в любую
 					точку планеты.</p>
			</div>
					
					<h1>Галерея</h1>

					<style>
						h1 {
							margin-left: 70px;
							font-size: 32px;
						}
						.address-info {
							text-align: center;
							font-size: 30px;
						}
						.description {
							font-size: 30px;
    						line-height: 48px;
    						
						}
						.description, .gallery-line {
							margin-left: 49px;
						}
				.gallery-line {
					display: flex;
				}
				.square {
					width: 200px;
    height: 200px;
    background-color: #f6f5f4;
    margin: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
				}

					</style>
			<div class="gallery">
				<div class="gallery-line"><div class="square"></div>
				<div class="square">
					<img src="">
				</div>
				<div class="square">
					<img src="">
				</div>
				<div class="square">
					<img src="">
				</div>
				<div class="square">
					<img src="">
				</div></div>
				<div class="gallery-line"><div class="square"></div>
				<div class="square">
					<img src="">
				</div>
				<div class="square">
					<img src="">
				</div>
				<div class="square">
					<img src="">
				</div>
				<div class="square">
					<img src="">
				</div></div>
			</div>
		</section>
</body>
</html>