<style>
    .dropdown-menu {
    width: 100%;
    height: auto;
    background-color: #AEC2D4;
    text-align: center;
    }
    .dropbtn {
    background-color: #AEC2D4;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    width: 350px;
    outline: none;
    }
    /* The container 
    <div>
    - needed to position the dropdown content */
    .dropdown {
    position: relative;
    display: inline-flex;
    }
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
    display: none;
    position: absolute;
    margin-top: 50px;
    background-color: #C3DDF0;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }
    #drop1 .dropdown-content a {
    padding:12px 122px;
    }
    /* Links inside the dropdown */
    .dropdown-content a {
    color: #40657C;
    padding: 12px 102px;
    text-decoration: none;
    display: block;
    }
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<div class="dropdown-menu">
    <div class="dropdown" id="drop1">
        <button class="dropbtn">Онлайн сервисы</button>
        <div class="dropdown-content">
            <a href="profile.php">Личный кабинет</a>
            <a href="#">Сроки доставки</a>
        </div>
    </div>
    <div class="dropdown" id="drop2">
        <button class="dropbtn"><a href="info.php">О компаний</a></button>
        <div class="dropdown-content">
            <a href="#">Все контакты</a>
            <a href="#">Наша деятельность</a>
            <a href="#">Галерея</a>
        </div>
    </div>
    <div class="dropdown" id="drop3">
        <button class="dropbtn"><a href="tarifs.php">Тарифы и услуги</a></button>
        <div class="dropdown-content">
            <a href="#">Экспресс доставка</a>
            <a href="#">Международная доставка</a>
        </div>
    </div>
    <div class="dropdown" id="drop4">
        <button class="dropbtn">Полезно знать</button>
        <div class="dropdown-content">
            <a href="#">Руководства по услугам</a>
            <a href="#">Частые вопросы</a>
            <a href="#">Способы оплаты</a>
            <a href="#">Правила упаковки</a>
            <a href="#">Закон о Почте</a>
            <a href="#">Типовый договор</a>
        </div>
    </div>
</div>