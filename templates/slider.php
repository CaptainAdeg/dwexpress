<style>
    .slider {
    display: block;
    position: relative;
    height: 470px;
    margin: 0 auto;
    margin-bottom: 3em;
    overflow: hidden;
    }
    .images-container {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    transition: 0.5s;
    }
    .images-container img {
    display: block;
    width: 100%;
    height: 100%;
    z-index: 1;
    }
    .buttons-block > div {
    color: #fff;
    cursor: pointer;
    position: absolute;
    top: 50%;
    font-size: 25px;
    z-index: 99;
    }
    #prev-btn {
    left: 5px;
    }
    #next-btn {
    right: 5px;
    }
    #dots-block {
    z-index: 100;
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    }
    .dot {
    width: 15px;
    margin-right: 7px;
    height: 15px;
    border: none;
    border-radius: 50%;
    background: rgb(255, 255, 255);
    opacity: 0.4;
    cursor: pointer;
    outline: none;
    }
    .dot-active {
    background: rgb(255, 255, 255);
    }
    @media screen and (max-width: 765px) {
      .slider {
        display: none;
      }  
    }
</style>
<div class="slider">
    <div id="img-container" class="images-container">
        <img class="slider-item fade" src="public/img/slider.png" alt="">
        <img class="slider-item fade" src="public/img/slider2.png" alt="">
        <img class="slider-item fade" src="public/img/slider3.png" alt="">
    </div>
    <div class="buttons-block">
        <div id="prev-btn">&lt;</div>
        <div id="next-btn">&gt;</div>
    </div>
    <div id="dots-block">
        <button class="dot dot-active"></button>
        <button class="dot"></button>
        <button class="dot"></button>
    </div>
</div>