<?php require_once "templates/header.php"; ?>
<?php require_once "templates/navbar.php"; ?>
<link rel="stylesheet" href="public/css/profile.css">
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/header.css">
<section>
    <img src="public/img/icons/икона4-05.svg" id="human">
    <h2 class="desc" id="who">Кто то</h2>
    <hr id="first-line">
    <div class="profile-info">
        <p>Для Вас организован превосходный сервис, которая <br> поможет сократить время доставки в несколько раз</p>
    </div>
    <div class="headers"><h1>Профиль</h1>
    <h2 class="desc2">Краткие описания вашего профиля</h2></div>
    
    <div class="profile">
        <div class="profile-display">
            <div class="col" style=" background-image: url('public/img/icons/икона4-05.svg'); background-size: 35px; background-position-x:0.5vw; background-position-y:15px;">
                <h2>Моя информация</h2>
                <hr>
                <p class="box">Обновить, изменить личные данные.</p>
                <div class="box2" id="col1">
                    <p><a href="">Редактировать</a>
                </div>
            </div>
            <div class="col" style=" background-image: url('public/img/icons/location.svg');background-size: 45px;">
                <h2>Адреса</h2>
                <hr>
                <p class="box">Добавить, изменить контактные данные.
                </p>
                <div class="box2" id="col2">
                    <p><a href="">Добавить</a></p>
                    <br>
                    <p><a href="">Редактировать</a>
                    </p>
                </div>
            </div>
            <div class="col" style=" background-image: url('public/img/icons/card.svg'); background-size: 44px; background-position-x:0.6vw; ">
                <h2>Способ оплаты </h2>
                <hr>
                <p class="box">Проверьте даты истечения 
                    срока действия и при 
                    необходимости обновите 
                    свои способы оплаты.
                </p>
                <div class="box2" id="col3">
                    <p><a href="">Выставление счета</a></p>
                    <br>
                    <p><a href="">Оплата онлайн</a>
                    </p>
                </div>
            </div>
            <div class="col" id="col4" style=" background-image: url('public/img/icons/option.svg'); background-size: 45px; background-position-y:16px; background-position-x:1px;">
                <h2>Задать настройки</h2>
                <hr>
                <p class="box">Выберите настройки по 
                    умолчанию для своих 
                    часто выполняемых задач 
                    по отправлениям.
                </p>
                <div class="box2">
                    <p><a href="">Задать настройки</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <h1>Мои посылки</h1>
        <div class="service-display">
            <!--<div class="display-type">
                <img src="../public/img/icons/box.svg" alt="">
                 <p class="row"><a href="">Мои посылки</a></p>
                  <img src="../public/img/icons/van.svg" alt="">
                 <p class="row" style="margin-left: 145px"><a href="">Вызвать курьера</a></p>
                 <img src="../public/img/icons/икона2-05.svg" alt="">
                 <p class="row"><a href="">Тарифный калькулятор</a></p>
                </div>-->
            <div class="display"></div>
            <p></p>
            <div class="display-info">
                <ul>
                    <li><span class="id" id="header1">ID:</span><span class="date" id="header2">Дата отправления</span><span class="status-header" id="header3">Статус</span></li>
                    <img src="public/img/icons/box-full.svg">
                    <li><span class="id">123</span><span class="date">24.05.2020</span><span class="status">Прибыл</span></li>
                    <img src="public/img/icons/box-full.svg">
                    <li><span class="id">123</span><span class="date">24.05.2020</span><span class="status">Прибыл</span></li>
                    <img src="public/img/icons/box-full.svg">
                    <li><span class="id">123</span><span class="date">24.05.2020</span><span class="status">Прибыл</span></li>
                    <img src="public/img/icons/box-full.svg">
                    <li><span class="id">123</span><span class="date">24.05.2020</span><span class="status">Прибыл</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<script src="public/js/mob.js"></script>
<?php require_once "modal/modal.php"; ?>
<?php require_once "templates/footer.php"; ?>