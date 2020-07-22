<!--<html><head>

<title>oform</title>

<body>-->
   <?php require_once "header.php"; ?>
   <link rel="stylesheet" href="../public/css/header.css">
    
      <section class="form-page">
         <div class="page-container">
            <nav class="country">
               <button class="country russia">Россия</button>
               <button class="country kazakhs">Казахстан</button>
            </nav>
            <hr>
            <div class="page-info">
               <div class="info-sender">
                  <div class="icons">
                     <img src="../public/img/icons-for-oform/human.svg" class="icon-human">
                  </div>
                  <input type="text" class="name" placeholder="Ф.И.О отправителя">
                  <div class="icons"><img src="../public/img/icons-for-oform/call.svg" class="icon-call"></div>
                  <input type="text" class="number1" placeholder="Номер телефона отправителя">
               </div>
               <div class="info-receiver">
                  <div class="icons"><img src="../public/img/icons-for-oform/human.svg" class="icon-human"></div>
                  <input type="text" class="name" placeholder="Ф.И.О получателя">
                  <div class="icons"><img src="../public/img/icons-for-oform/call.svg" class="icon-call"></div>
                  <input type="text" class="number2" placeholder="Номер телефона получателя">
               </div>
            </div>
            <hr>
            <div class="page-info-more">
               <div class="more-delivery">
                  <div class="icons"><img src="../public/img/icons-for-oform/scale.svg" class="icon-scale"></div>
                  <input type="text" placeholder="Вес посылки"><br>
                  <div class="icons"><img src="../public/img/icons-for-oform/world.svg" class="icon-world"></div>
                  <input type="text" placeholder="Область доставки"><br>
                  <div class="icons"><img src="../public/img/icons-for-oform/world.svg" class="icon-world"></div>
                  <input type="text" placeholder="Город доставки"><br>
                  <div class="icons"><img src="../public/img/icons-for-oform/world.svg" class="icon-world"></div>
                  <input type="text" placeholder="Адрес доставки">
               </div>
               <hr>
               <div class="more-price">
                  <div class="icons"><img src="../public/img/icons-for-oform/scan.svg" class="icon-scan"></div>
                  <input type="text" placeholder="Трекинг номер посылки"><br>
                  <div class="icons"><img src="../public/img/icons-for-oform/pen.svg" class="icon-pen"></div>
                  <input type="text" placeholder="Описание вложения"><br>
                  <div class="icons"><img src="../public/img/icons-for-oform/dollar.svg" class="icon-dollar"></div>
                  <input type="text" placeholder="Объявленная стоимость">
               </div>
            </div>
            <hr>
            <div class="page-pocket">
               <div class="pocket-col1">
               	<input type="radio" id="c1" name="cc" class="label1" />
				<label for="c1" class="label1"><span></span>Пленка+пакет</label><br>
				<input type="radio" id="c2" name="cc"  class="label2" />
				<label for="c2" class="label2" ><span></span>Коробка</label>
				<button class="question" id="q1"><img src="../public/img/icons-for-oform/question.svg"></button>
               <button class="question" id="q2"><img src="../public/img/icons-for-oform/question.svg"></button>
               </div>
               <div class="pocket-col2">
               	<input type="radio" id="c3" name="cc" class="label1" />
				<label for="c3" class="label1"><span></span>Коробка+уголок</label><br>
				<input type="radio" id="c4" name="cc"  class="label2" />
				<label for="c4" class="label2"><span></span>Обрещетка</label>
               </div>
               <button type="radio" class="question" id="q3"><img src="../public/img/icons-for-oform/question.svg"></button>
               <button type="radio" class="question" id="q4"><img src="../public/img/icons-for-oform/question.svg"></button>
            </div>
            <hr>
            <div class="page-service">
              <input type="checkbox" id="c5" name="cc"  class="label3" />
				<label for="c5" class="label2"><span></span>Услуги фотоотчёта</label><br>
               <button class="final">Оформить заказ</button>
            </div>
         </div>
      </section>      
     <!-- </body>
 </html>-->