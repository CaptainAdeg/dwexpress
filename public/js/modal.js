var modal = document.getElementById('myModal');
var buttons = document.getElementsByClassName("square")
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
