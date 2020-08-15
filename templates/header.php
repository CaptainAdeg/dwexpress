<?php

	session_start();

	// Если пользователь сменил язык
	if( isset($_GET['lang']) ) {
		$_SESSION['lang'] = trim($_GET['lang']);
	}

	// Подключение всех данных для языка
	switch( $_SESSION['lang'] ) {
		case 'EN':
			require_once 'langs/en.php';
			break;
		case 'CN':
			require_once 'langs/cn.php';
			break;
		case 'RU':
			require_once 'langs/ru.php';
			break;
	}	

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title?></title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/footer.css">
        <link rel="stylesheet" href="public/css/slider.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.php">
                <img src="public/img/логотип.svg" alt="logo dwexpress" class="logoImg">
                </a>
            </div>
            <!--<div class="tracking">
                <input type="text" id="trackID" placeholder="Отслеживание">
                <img src="public/img/geo.png" class="geoForTracking">
                </div>-->
            <div class="profile0">
                <a href="profile.php">
                <img src="public/img/white-prof.svg">
                </a>
            </div>
            <div class="contacts">
                <a href="tel:+8 707 877 1839">8 707 877 1839</a>
                <a href="tel:+1 223 456 1231">1 223 456 1231</a>
            </div>
            <!--<div class="language">
                <a href="" class="languageItem">RU</a>
                <a href="index.php" class="languageItem languageItemActive">EN</a>
                <a href="en.php" class="languageItem">CN</a>
                </div>-->
            <div class="lan-dropdown">
				<div class="lan-dropbtn">
					<?php

						// Если нет выбранного языка то выбераем RU
						if( isset($_SESSION['lang'])) {
							echo $_SESSION['lang'];
						} else {
							echo 'RU';
							$_SESSION['lang'] = 'RU';
						}
					
					?>
				</div>
                <div class="lan-dropdown-content">
                    <span class="langElem" onclick="location.href = '?lang=RU'">RU</span>
                    <span class="langElem" onclick="location.href = '?lang=EN'">EN</span>
                    <span class="langElem" onclick="location.href = '?lang=CN'">CN</span>
                </div>
                
            </div>
            <div class="side-button-1-wr">
    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open">
              <img src="public/img/icons-mobile/burger.svg">
            </div>
    <div class="side-b side-close">
              <img src="public/img/icons-mobile/burger.svg">
            </div>

    </label>
</div>

           <!-- <script>
              function open() {
                document.getElementByClassName('dropdown').style.width = "100%";
                document.getElementByClassName('dropdown').style.display = "block";
              }
            </script>-->
            <!--<div class="menu">
                <nav><div class="online_service"><h2>Онлайн сервисы</h2>
                	<ul class="submenu">
                		<li><a href="">Личный кабинет</a></li>
                		<li><a href="">Вызов курьера</a></li>
                		<li><a href="">Заказ обратного звонка</a></li>
                		<li><a href="">Тарифный калькулятор</a></li>
                		<li><a href="">Служба контроля качества</a></li>
                		<li><a href="">Заключение договора</a></li>
                		<li><a href="">Сроки доставки</a></li>
                		<li><a href="">Инструкция iDocs</a></li>
                	</ul></div>
                	<div>
                		<h2>Тарифы и услуги</h2>
                		<ul class="submenu">
                			<li><a href="">Экспресс доставка</a></li>
                			<li><a href="">Стандартная доставка</a></li>
                			<li><a href="">Внутригородская доставка</a></li>
                			<li><a href="">Международная доставка</a></li>
                			<li><a href="">Центральная Азия</a></li>
                			<li><a href="">Дополнительные услуги</a></li>
                			<li><a href="">Классификатор зон</a></li>
                			<li><a href="">Интернет-магазинам</a></li>
                		</ul>
                	</div>
                	<div>
                		<h2>Полезно знать</h2>
                		<ul class="submenu">
                			<li><a href="">Руководство по услугам</a></li>
                			<li><a href="">Частые вопросы</a></li>
                			<li><a href="">Способы оплаты</a></li>
                			<li><a href="">Правила пересылки</a></li>
                			<li><a href="">Правила упаковки</a></li>
                			<li><a href="">Закон о Почте</a></li>
                			<li><a href="">Типовой договор</a></li>
                		</ul>
                	</div>
                	<div>
                		<h2>О компании</h2>
                		<ul class="submenu">
                			<li><a href="">Все контакты</a></li>
                			<li><a href="">Наша деятельность</a></li>
                			<li><a href="">Галерея</a></li>
                		</ul>
                	</div>
                </nav>
                
                </div>-->
            <!--<nav>
                <ul class="topmenu">
                  <li><a href="">Онлайн сервисы</a></li>
                  	<ul class="submenu">
                  		<li><a href="">Личный кабинет</a></li>
                  		<li><a href="">Вызов курьера</a></li>
                  		<li><a href="">Заказ обратного звонка</a></li>
                  		<li><a href="">Тарифный калькулятор</a></li>
                  		<li><a href="">Служба контроля качества</a></li>
                  		<li><a href="">Заключение договора</a></li>
                  		<li><a href="">Сроки доставки</a></li>
                  		<li><a href="">Инструкция iDocs</a></li>
                		</ul>
                  <li><a href="">Тарифы и услуги</a></li>
                  	<ul class="submenu">
                  		<li><a href="">Экспресс доставка</a></li>
                   		<li><a href=""></a>Стандартная доставка</li>
                   		<li><a href="">Внутригородская доставка</a></li>
                   		<li><a href="">Международная доставка</a></li>
                   		<li><a href="">Центральная Азия</a></li>
                   		<li><a href="">Дополнительные услуги</a></li>
                   		<li><a href=""></a>Классификатор зон</li>
                   		<li><a href="">Интернет-магазинам</a></li>
                   	</ul>
                  <li><a href="">Полезно знать</a></li>
                  	<ul class="submenu">
                  		<li><a href="">Руководство по услугам</a></li>
                   		<li><a href="">Частые вопросы</a></li>
                   		<li><a href="">Способы оплаты</a></li>
                   		<li><a href="">Правила пересылки</a></li>
                   		<li><a href="">Правила упаковки</a></li>
                   		<li><a href="">Закон о Почте</a></li>
                   		<li><a href="">Типовой договор</a></li>
                
                   	</ul>
                  <li><a href="">О компании</a></li>
                  	<ul class="submenu">
                  		<li><a href="">Все контакты</a></li>
                   		<li><a href="">Наша деятельность</a></li>
                   		<li><a href="">Галерея</a></li>
                   	</ul>
                </ul>
                </nav>
                <div class="contacts">
                	<h4>87006033365</h4>
                	<h4>87006033365</h4>
                </div>-->
        </header>