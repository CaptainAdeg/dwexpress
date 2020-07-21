


<link rel="stylesheet" href="../public/css/characteristic.css">

<button id="myBtn">Открыть окно</button>


<div id="myModal" class="modal">
 
  <!--<div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 class="zayava"><b id="ostav">Оставить заявку</b></h2>
     <input type="text" name="name" id="name" placeholder="Ваше имя" title="Ваше имя">
      <input class="b-input inputmask" type="text" name="phone" id="phone" placeholder="Телефон" title="Телефон">
      <button class="b-but" type="submit">Отправить</button>
  </div>-->
  <div class="modal-content">
    <div><span class="close">&times;</span></div>
	<input type="text" name="name" placeholder="Откуда" title="Ваше имя" class="input1">
  <input type="text" name="name" placeholder="Куда" title="Ваше имя" class="input1">
  <input type="text" name="name" placeholder="Вес" title="Ваше имя" class="input2">
  <img src="../public/img/icons/икона1-05.svg" alt="" class="logo1">
  <p>
    <button class="b-but">Рассчитать</button>
</p>
</div>


</div>

	<script type="text/javascript">
	var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	</script>

