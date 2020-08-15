<style>
    
    .dropdown-menu {
    width: 100%;
    height: auto;
    background-color: #AEC2D4;
    text-align: center;
    white-space: nowrap;/*теперь флексбокс не съезжает*/

    }
    .dropbtn {
    background-color: #AEC2D4;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    width: 350px;
    outline: none;
    text-transform: uppercase;
    }
    /* The container 
    <div>
    - needed to position the dropdown content */
    .dropdown {
    position: relative;
    display: inline-flex;
    max-width: 24vw;
    }
    .dropdown a {
        color: white;
        text-decoration: none;
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
    text-transform: uppercase;
    }
   
    /* Links inside the dropdown */
    .dropdown-content a {
    color: #40657C;
    text-decoration: none;
    display: block;
    }
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}
    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}
    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: transparent;}
   
    .menu-fixed {
        position: fixed;
        top: 0;
        left: 0;
        padding: 10px 0;
        animation: showElement;
        animation-duration: 1s;
    }
    @keyframes showElement {
        0% {
            opacity: 0;
            top: -20px;
        }
        100% {
            opacity: 1;
            top: 0;
        }
    }
    #content1 a{
        padding: 12px 89px;
        
    }
    #content2 a{
        padding: 12px 80px;
    }
    #content3 a{
        padding: 12px 100px;
    }
    #content4 a{
        padding: 12px 50px;
    }
    
</style>
<link rel="stylesheet" href="public/css/header.css">
<link rel="stylesheet" href="public/css/style.css">
<script type="text/javascript" src="public/js/mob.js"></script>
<div class="dropdown-menu">
    <div class="dropdown" id="drop1">
        <button class="dropbtn"><a href="index.php">Онлайн сервисы</a></button>
        <div class="dropdown-content" id="content1">
            <a href="profile.php">Личный кабинет</a>
            <a onclick="document.getElementById('myModal1').style.display='block'">Отслеживание</a>
            <a onclick="document.getElementById('myModal2').style.display='block'">Калькулятор</a>
            <a onclick="document.getElementById('myModal3').style.display='block'">Обратный звонок</a>
        </div>
    </div>
    <div class="dropdown" id="drop2">
        <button class="dropbtn"><a href="info.php">О компаний</a></button>
        <div class="dropdown-content" id="content2">
            <a href="info.php#all">Все контакты</a>
            <a href="info.php#src2-2">Наша деятельность</a>
            <a href="info.php#gallery">Галерея</a>
        </div>
    </div>
    <div class="dropdown" id="drop3">
        <button class="dropbtn"><a href="tarifs.php">Тарифы и услуги</a></button>
        <div class="dropdown-content" id="content3">
            <a href="tarifs.php#src3-1">Сроки доставки</a>
            <a href="tarifs.php#src3-2">Страхование</a>
        </div>
    </div>
    <div class="dropdown" id="drop4">
        <button class="dropbtn"><a href="knowledge.php">Полезно знать</a></button>
        <div class="dropdown-content" id="content4">
            <a href="knowledge.php#src4-1">Типовый договор</a>
            <a href="knowledge.php#src4-2">Способы оплаты</a>
            <a href="knowledge.php#src4-3">Функций выбора упаковки</a>
            <a href="knowledge.php#src4-4">Закон о Почте</a>
            <a href="knowledge.php#src4-5">Запрещено перевозить</a>
            <a href="knowledge.php#src4-6">Частые вопросы</a>
        </div>
    </div>
</div>

<input type="checkbox" id="side-checkbox" />
    <div class="side-panel">
    <label class="side-button-2" for="side-checkbox">+</label>    
    <div class="side-title">Выдвижная панель:</div>
    <p>Информация в панеле</p>

    <div class="wrappere">
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item__trigger">
                    <a href="index.php">Онлайн сервисы</a>
                </div>
                <div class="accordion-item__content">
                    <a href="profile.php">Личный кабинет</a>
                </div>
                <div class="accordion-item__content">
                    <a href="index.php#but1">Отслеживание</a>
                </div>
                <div class="accordion-item__content">
                    <a href="index.php#but2">Калькулятор</a>
                </div>
                <div class="accordion-item__content">
                    <a href="index.php#but3">Обратный звонок</a>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item__trigger">
                    <a href="info.php">О компаний</a>
                </div>
                <div class="accordion-item__content">
                    <a href="info.php#all">Все контакты</a>
                </div>
                <div class="accordion-item__content">
                    <a href="info.php#src2-2">Наша деятельность</a>
                </div>
                <div class="accordion-item__content">
                    <a href="info.php#gallery">Галерея</a>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item__trigger">
                    <a href="tarifs.php">Тарифы и услуги</a>
                </div>
                <div class="accordion-item__content">
                    <a href="tarifs.php#src3-1">Сроки доставки</a>
                </div>
                <div class="accordion-item__content">
                    <a href="tarifs.php#src3-2">Страхование</a>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item__trigger">
                    <a href="knowledge.php">Полезно знать</a>
                </div>
                <div class="accordion-item__content">
                    <a href="knowledge.php#src4-1">Типовый договор</a>
                </div>
                <div class="accordion-item__content">
                    <a href="knowledge.php#src4-2">Способы оплаты</a>
                </div>
                <div class="accordion-item__content">
                    <a href="knowledge.php#src4-3">Функций выбора упаковки</a>
                </div>
                <div class="accordion-item__content">
                    <a href="knowledge.php#src4-4">Закон о Почте</a>
                </div>
                <div class="accordion-item__content">
                    <a href="knowledge.php#src4-5">Запрещено перевозить</a>
                </div>
                <div class="accordion-item__content">
                    <a href="knowledge.php#src4-6">Частые вопросы</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    window.onscroll = function showHeader() {
    var header = document.querySelector('.dropdown-menu');
    if(window.pageYOffset > 50){
        header.classList.add('header_fixed');
    } else{
        header.classList.remove('header_fixed');
    }
}
</script>