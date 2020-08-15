<?php require_once "templates/header.php"; ?>
<?php require_once "templates/navbar.php"; ?>
<link rel="stylesheet" href="public/css/oform2.css">
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/header.css">
<section>
        <div class="form__header">
                <div class="header__buttons">
                    <button>Россия</button>
                    <button>Казахстан</button>
                </div>
            </div>
            <hr>
            <div class="info_header">
                <h2>Отправитель:</h2>
            </div>
            <div class="form__info">
                <div class="block">
                    <div class="block-row" id="r1">
                        <div class="row" >
                            <div class="img" style="background-image: url('public/img/icons-for-oform/human.svg');"></div>
                            <input type="text" placeholder="Ф.И.О отправителя">
                        </div>
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/call.svg');"></div>
                            <input type="text" placeholder="Номер телефона отправителя">
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-row">
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/human.svg');"></div>
                            <input type="text" placeholder="Ф.И.О получателя">
                        </div>
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/call.svg');"></div>
                            <input type="text" placeholder="Номер телефона получателя">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form__info">
                <div class="block">
                    <div class="block-row" id="r1">
                        <div class="row" >
                            <div class="img" style="background-image: url('public/img/icons-for-oform/scale.svg');"></div>
                            <input type="text" placeholder="Вес посылки">
                        </div>
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/world.svg');"></div>
                            <input type="text" placeholder="Область доставки">
                        </div>
                        <div class="row" >
                            <div class="img" style="background-image: url('public/img/icons-for-oform/world.svg');"></div>
                            <input type="text" placeholder="Город доставки">
                        </div>
                        <div class="row" >
                            <div class="img" style="background-image: url('public/img/icons-for-oform/world.svg');"></div>
                            <input type="text" placeholder="Адрес доставки">
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-row">
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/scan.svg');"></div>
                            <input type="text" placeholder="Трекинг номер посылки">
                        </div>
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/pen.svg');"></div>
                            <input type="text" placeholder="Описание вложения">
                        </div>
                        <div class="row">
                            <div class="img" style="background-image: url('public/img/icons-for-oform/dollar.svg');"></div>
                            <input type="text" placeholder="Объявленная стоимость">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form__info">
                <div class="block">
                    <div class="block-row" id="r1">
                        <div class="row" id="que">
                            <label><input id="Dest" type="radio" name="user" value="Open4" aria-required="true" onChange="Selected(this)"><span>Пленка + пакет</span></label>
                            <button class="m-quest-block" data-modal="myModal1"><img src=""></button>
                        </div>
                        <div class="row"  id="que">
                          	<label><input id="Dest" type="radio" name="user" value="Open2" aria-required="true" onChange="Selected(this)"><span>Коробка</span></label>
                            <button class="m-quest-block" data-modal="myModal2"><img src=""></button>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-row">
                        <div class="row" id="que">
                           <label><input id="Dest" type="radio" name="user" value="Open1" aria-required="true" onChange="Selected(this)"><span>Коробка + уголок</span></label>
                            <button class="m-quest-block" data-modal="myModal3"><img src=""></button>
                        </div>
                        <div class="row" id="que">
                           <label><input id="Dest" type="radio" name="user" value="Open3" aria-required="true" onChange="Selected(this)"><span>Обрещетка</span></label>
                            <button class="m-quest-block" data-modal="myModal4"><img src=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form__info">
                <div class="block">
                    <div class="block-row" id="r1">
                        <div class="row" id="que">
                            <label><input id="Dest" type="radio" name="user" value="Open1" aria-required="true" onChange="Selected(this)"><span>Услуга фотоотчета</span></label>
                            <button class="m-quest-block" data-modal="myModal1"><img src=""></button>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="block-row">
                        <div class="row" id="submit">
                            <button class="submit">Оформить заказ</button>
                        </div>
                    </div>
                </div>
            </div>
        

<link rel="stylesheet" href="modal/quest1.css">
<div id="myModal1" class="modal">
  <div class="modal-content1">
    <div><span class="close" data-modal="myModal1">&times;</span></div>
	<div class="content">
	<div class="content__header">
		<h2><i>Коробка + уголок -</i></h2>
	</div>
	<hr>
	<div class="content__info">
		<p>Данный тип упаковки подходит для сборных совмеситимых товаров - хрупких, деликатных грузов, а также предметов, способных повредить или испортить соседствующие отправление. Также необходимо упаковывать товар таким образом, если вам важна сохранность фирменных упаковок  от производителей - это наиболее актуально для обуви и сумок.
		Защитные уголки может увеличить вес посылка, что соответсвенно, может повлиять на конечную стоимость перевозки.</p>
	</div>
</div>
</div>
</div>
<link rel="stylesheet" href="modal/quest2.css">
<div id="myModal2" class="modal">
  <div class="modal-content2">
    <div><span class="close" data-modal="myModal2">&times;</span></div>
	<div class="content">
	<div class="content__header">
		<h2><i>Коробка -</i></h2>
	</div>
	<hr>
	<div class="content__info">
		<p>Данный тип упаковки подходит для сборных совмеситимых товаров. В слуае если если внешний вид фирменный коробки не является приоритетным, или на вообще не нужна, то ее можно будет удалить( указывать в примечаний ). </p>
	</div>
</div>
</div>
</div>
<link rel="stylesheet" href="modal/quest3.css">
<div id="myModal3" class="modal">
  <div class="modal-content3">
    <div><span class="close" data-modal="myModal3">&times;</span></div>
	<div class="content">
	<div class="content__header">
		<h2><i>Обрещетка -</i></h2>
	</div>
	<hr>
	<div class="content__info">
		<p>Самый подходящий вариант упаковки хрупких посылок, а также для специфических категорий товаров - оборудований, оргтехники, стеклянных и керамических изделий.
При отправке посылка не забывайте  о температурных колебаниях в зависимости от сезона - некоторые виды товаров могут негативно реагировать на изменения погодного режима. </p>
	</div>
</div>
</div>
</div>
<link rel="stylesheet" href="modal/quest4.css">
<div id="myModal4" class="modal">
  <div class="modal-content4">
    <div><span class="close" data-modal="myModal4">&times;</span></div>
	<div class="content">
	<div class="content__header">
		<h2><i>Пленка + пакет -</i></h2>
	</div>
	<hr>
	<div class="content__info">
		<p>Подходит для упаковки нехрупкого штучного товара а также одежды, не относящейся с декоративными элементами - стразами, пайетками и т.д. нужно упаковывать в пленку а затем в коробку. </p>
	</div>
</div>
</div>
</div>

    <script>

function Selected(a) {
  var label = a.value;

    if (label=="Open1") {
       document.getElementById("myModal1").style.display='block';
   } else {
       document.getElementById("myModal1").style.display='none';
   } 
   if (label=="Open2") {
       document.getElementById("myModal2").style.display='block';
   } else {
       document.getElementById("myModal2").style.display='none';
   } 
   if (label=="Open3") {
       document.getElementById("myModal3").style.display='block';
   } else {
       document.getElementById("myModal3").style.display='none';
   } 
   if (label=="Open4") {
       document.getElementById("myModal4").style.display='block';
   } else {
       document.getElementById("myModal4").style.display='none';
   } 
}

	var modal = document.getElementById('myModal');
	var buttons = document.getElementsByClassName("m-quest-block");
	var span = document.getElementsByClassName("close");

	for (var i = 0; i < buttons.length; i++) {
	buttons[i].onclick = function() {
    var id = this.getAttribute('data-modal');
    var modal = document.getElementById(id);
    modal.style.display = 'block';
  }
}

for (var i = 0; i < span.length; i++) {
  span[i].onclick = function() {
    var id = this.getAttribute('data-modal');
    var modal = document.getElementById(id);
    modal.style.display = 'none';
  }
}

window.onclick = function(event) {
  var isModal = (' ' + event.target.className + ' ').indexOf(' modal ') > -1;
  if (isModal) {
    event.target.style.display = "none";
  }
}

</script>
    
    </section>
    <script src="public/js/mob.js"></script>
<?php require_once "templates/footer.php"; ?>