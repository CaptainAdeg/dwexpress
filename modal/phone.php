
	<link rel="stylesheet" href="../public/css/phone.css">
	<button id="myBtn">Открыть окно</button>
<div id="myModal3" class="modal3">
 
  <!--<div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 class="zayava"><b id="ostav">Оставить заявку</b></h2>
     <input type="text" name="name" id="name" placeholder="Ваше имя" title="Ваше имя">
      <input class="b-input inputmask" type="text" name="phone" id="phone" placeholder="Телефон" title="Телефон">
      <button class="b-but" type="submit">Отправить</button>
  </div>-->
  <div class="modal-content3">
    <div><span class="close3">&times;</span></div>
	<input type="text" name="name" id="na3" placeholder="Номер телефона/почта " title="Ваше имя">
  <img src="dweoflogo/call.svg" alt="">
  <p>
	<button class="b-but3" type="submit">Отправить</button>
</p>
</div>


</div>

	<script type="text/javascript">
	var modal = document.getElementById('myModal3');


var btn = document.getElementById("but3");


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