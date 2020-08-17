<?php require_once "templates/header.php"; ?>
<?php require_once "templates/navbar.php"; ?>
<?php require_once "templates/slider.php"; ?>
<link rel="stylesheet" href="public/css/about.css">
<link rel="stylesheet" href="public/css/header.css">
<link rel="stylesheet" href="public/css/footer.css">
<link rel="stylesheet" href="public/css/style.css">
<link rel="stylesheet" href="public/css/header.css">
<!--<section>
    <div class="slider">
                 <div id="img-container" class="images-container">
                 <img class="slider-item fade" src="../public/img/slider.png" alt="">
                 <img class="slider-item fade" src="../public/img/slider2.png" alt="">
                 <img class="slider-item fade" src="../public/img/slider.png" alt="">
                 <img class="slider-item fade" src="../public/img/slider2.png" alt="">
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
    </section>-->
<section class="info-all">
    <div class="address">
        <div class="address-info">
            <p id="all">Все контакты</p>
            <br>
            <p class="info-source">8-777-777-77-77</p>
            <p class="info-source">345-25-55</p>
            <br>
            <p class="info-source">Сатпаева 30а</p>
        </div>
        <div class="address-map">
            <div id="map"></div>
            <script>
                function initMap() {
  // The location of Uluru
  var uluru = {lat: 43.234797, lng: 76.920931};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 18, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
            </script>
            <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh9hVZDVLqMfheQIe1OCnqy7Rt-s-5pYM&callback=initMap">
    </script>
        </div>
    </div>
    <div class="about_us">
        <h1 id="src2-2">Наша деятельность</h1>
        <br>
        <p class="description">Курьерская компания «DWExpress» работает на рынке
            Казахстана c 1995 года. Мы имеем широко развитую сеть во всех странах
            мира и предлагаем широкий спектр услуг, включающий в себя 
            индивидуальные решения по транспортировке экспресс-пакетов и
            мелкогабаритных грузов, по принципу «от двери до двери» в любую
            точку планеты.
        </p>
        <br>
        <p class="description">Доставка интернет-посылок стала основным направлением работы DWExpress, и благодаря широкой географии присутствия при демократичных тарифах, мы создали лучшие условия для доставки Ваших посылок и нацелены на долговременное сотрудничество.
        </p>
        <br>
        <p class="description">На сегодняшний момент наша компания оказывает весь комплекс услуг по осуществлению международных перевозок по следующим маршрутам: из Китая в Россию, Казахстан, Кыргызстан, Узбекистан и Украину.
        </p>
        <br>
        <p class="description">Мы располагаем офисами, где работают наши русские и китайские специалисты и собственным складом консолидации в Гуанчжоу, ИУ, Пекине и Шисин. Планируется открытие новых складов в таких городах, как Шэньчжень и Шанхай</p>
        <br>
    </div>
</section>
<style>
    .flex-container {
    display: none;
    }
</style>
<?php require_once "modal/modal.php"; ?>
<script src="public/js/mob.js"></script>
<?php require_once "templates/footer.php"; ?>