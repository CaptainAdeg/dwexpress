<!DOCTYPE html>
<html>
<head>
	<title>Nachalot</title>
	</head>
<body>
<style type="text/css">
		.wrapper {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-gap: 1em;
			grid-auto-rows: minmax(200px, auto);
			font-size: 25px;

			
		}
		.wrapper > div {
			border:5px solid #129BFF;
			border-radius: 20px;
			vertical-align: middle;
			text-align: center;

height		: auto;
	
	

			
		} 
		.wrapper > div > a {
			text-decoration: none;
			color: black;


		}

		.info {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-gap: 2em;
			grid-auto-rows: 300px;
			font-size: 30px;
		}
		.info > div, h2 {
			border: 5px solid #129BFF;
			

		}
		.logos {
			width: 100px;
			align-items: center;

		}
		p {
			text-align: center;		}
		

		
	</style>
	<div class="wrapper">
		<div class="finding"><a href=""><img src="икона1-05.svg" class="logos"><p>Отслеживание<p></a></div>
		<div class="calc"><a href="" ><img src="икона2-05.svg" class="logos"><p>Калькулятор</p></a></div>
		<div class="call"><a href=""><img src="икона3-05.svg" class="logos"><p>Оставить звонок</p></a></div>
		<div class="mycab"><a href=""><img src="икона4-05.svg" class="logos"><p>Личный кабинет</p></a></div>
	</div>
	<h2>Работая с нами вы получаете</h2>
	<div class="info">
		<div class="find">
			
			<p>Отслеживание</p></div>
		<div class="box">
			
			<p>Надежность</p></div>
		<div class="time">
			
			<p>Практичность</p></div>
	</div>
<?php require_once "templates/header.php"; ?>
	



<pre>











































</pre>


<div class="forAdilzhan"></div>
	
<?php require_once "templates/footer.php"; ?>
<a href="#">вверх страницы</a>
</body>
</html>