<?php require_once "templates/header.php"; ?>
<?php require_once "templates/navbar.php"; ?>
<link rel="stylesheet" href="public/css/oform.css">

<section class="form-page">
    <div class="page-container">
        <nav class="country">
            <button class="country russia"><p>Россия</p></button>
            <button class="country kazakhs"><p>Казахстан</p></button>
        </nav>
        <hr class="top-line">
        <h3 class="data">Введите свои данные</h3>
        <div class="page-info">
            <div class="info-sender">
                <div class="icons">
                    <img src="public/img/icons-for-oform/human.svg" class="icon-human">
                </div>
                <input type="text" class="name" placeholder="Ф.И.О отправителя">
                <div class="icons"><img src="public/img/icons-for-oform/call.svg" class="icon-call"></div>
                <input type="text" class="number1" placeholder="Номер телефона отправителя">
            </div>
            <div class="info-receiver">
                <div class="icons"><img src="public/img/icons-for-oform/human.svg" class="icon-human"></div>
                <input type="text" class="name" placeholder="Ф.И.О получателя">
                <div class="icons"><img src="public/img/icons-for-oform/call.svg" class="icon-call"></div>
                <input type="text" class="number2" placeholder="Номер телефона получателя">
            </div>
        </div>
        <hr>
        <div class="page-info-more">
            <div class="more-delivery">
                <div class="icons"><img src="public/img/icons-for-oform/scale.svg" class="icon-scale"></div>
                <input type="text" placeholder="Вес посылки"><br>
                <div class="icons"><img src="public/img/icons-for-oform/world.svg" class="icon-world"></div>
                <input type="text" placeholder="Область доставки"><br>
                <div class="icons"><img src="public/img/icons-for-oform/world.svg" class="icon-world"></div>
                <input type="text" placeholder="Город доставки"><br>
                <div class="icons"><img src="public/img/icons-for-oform/world.svg" class="icon-world"></div>
                <input type="text" placeholder="Адрес доставки">
            </div>
            <hr>
            <div class="more-price">
                <div class="icons"><img src="public/img/icons-for-oform/scan.svg" class="icon-scan"></div>
                <input type="text" placeholder="Трекинг номер посылки"><br>
                <div class="icons"><img src="public/img/icons-for-oform/pen.svg" class="icon-pen"></div>
                <input type="text" placeholder="Описание вложения"><br>
                <div class="icons"><img src="public/img/icons-for-oform/dollar.svg" class="icon-dollar"></div>
                <input type="text" placeholder="Объявленная стоимость">
            </div>
        </div>
        <hr>
        <div class="page-pocket">
            <div class="page-col1">
                <input type="checkbox" id="in1">
                <label for="in1" class="label1"><span></span>Пленка+пакет</label>
                <button class="quest-block"><img src="" col-block1></button>
                <input type="checkbox" id="in2">
                <label for="in2" class="label2" style="position: relative; right: 44px;"><span></span>Коробка</label>
                <button class="quest-block"><img src="" col-block1></button>
            </div>
            <div class="page-col2">
                <input type="checkbox" id="in3">
                <label for="in3" class="label1"><span></span>Коробка+уголок</label>
                <button class="quest-block" id="col-block2"><img src=""></button>
                <input type="checkbox" id="in4">
                <label for="in4" class="label2" style="position: relative; left:27px;"><span></span>Обрещетка</label>
                <button class="quest-block" id="col-block2"><img src=""></button>
            </div>
        </div>


                    <!--===Mobile version of service-->
            <div class="mob-page-pocket">
            <div class="mob-page-col1">
                <input type="checkbox" id="m-in1">
                <label for="m-in1" class="m-label1"><span></span><p>Пленка+пакет</p></label>
                <button class="m-quest-block"><img src="" col-block1></button>
                <input type="checkbox" id="m-in2">
                <label for="m-in2" class="m-label2"><span></span><p>Коробка</p></label>
                <button class="m-quest-block"><img src="" col-block1></button>
            </div>
            <div class="mob-page-col2">
                <input type="checkbox" id="m-in3">
                <label for="m-in3" class="m-label1"><span></span><p>Коробка+уголок</p></label>
                <button class="m-quest-block"><img src=""></button>
                <input type="checkbox" id="m-in4">
                <label for="m-in4" class="m-label2"><span></span><p>Обрещетка</p></label>
                <button class="m-quest-block"><img src=""></button>
            </div>
        </div>
                    <!--Mobile version of service===-->





        <hr>
        <div class="page-service">
            <input type="checkbox" id="c5" name="cc"  class="label3" />
            <label for="c5" class="label2"><span style="margin-right: 30px;
            margin-left: 70px;"></span>Услуги фотоотчёта</label>
            <button class="quest-block-last" ><img src=""></button><br>
            <button class="final">Оформить заказ</button>
        </div>


             <!--===Mobile version of service2-->
            <div class="mob-page-service">
                <div class="mob-extra">
                    <input type="checkbox" id="m-c5" name="cc"  class="mob-label3" />
                    <label for="m-c5" class="mob-label3"><span></span><p>Услуги фотоотчёта</p></label>
                    <button class="mob-quest-block-last" ><img src=""></button>
                </div>
            <br>
                <button class="mob-final">Оформить заказ</button>
        </div>
              <!--Mobile version of service2===-->


    </div>
</section>

<script src="public/js/modal.js"></script>
<?php require_once "templates/footer.php"; ?>