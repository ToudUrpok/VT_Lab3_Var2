<?php  
    require "follow_user.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="HIP_css/HIP_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script,700&amp;subset=cyrillic-ext">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <title>Батэ</title>
</head>
<body>

<header class="header">
    <div class="container_header">
        <div class="header__inner">
            <div class="header__logo">
                <div class="emblem"> <img width="250" border="0" height="285" src="images/Emblem.png"/> </div>
                <div class="sign">Сайт ФК БАТЭ</div> 
                 
            </div>

            <?php  
               require "Lincs.php"; 
            ?>
                <br/> <br/> <br/> <br/> <br/>

        </div>
    </div>
</header>

<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
<section class="section section-catalog">
  <div class="container">
      


    <div class="catalog">
        
      <div class="catalog__item">
        <div class="match catalog__match">
        <div class="catalog__match__head">  
            <div class="team__atr">
              <img width="200" border="0" height="230" src="images/logo_fcbate_new_2020.svg" alt="" id="team1" class="team__img">
              VS
            
              <img width="250" border="0" height="230" src="images/dinamo-minsk.png" alt="" id="team1" class="team__img">
              
            </div>
          
        </div>  
            
          <div class="product__content">
            <h3 class="product__title">БАТЭ - Динамо</h3>
            <p class="product__description">11.03.2020, 18:00 начало, полуфинал кубка Беларуси (1-я игра)</p>
          </div>
          <footer class="product__footer">
            
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">Борисов-арена</span>
                
              </div>
              <button class="btn product__btn" type="button">купить билет</button>
            </div>
          </footer>
        </div>
      </div>
        
    
        <div class="catalog__item">
        <div class="match catalog__match">
        <div class="catalog__match__head">  
            <div class="team__atr">
              <img width="200" border="0" height="230" src="images/logo_fcbate_new_2020.svg" alt="" id="team1" class="team__img">
              
                VS
              <img width="200" border="0" height="200" src="images/TorpedoBel.png" alt="" id="team1" class="team__img">
              
            </div>
          
        </div>  
            
          <div class="product__content">
            <h3 class="product__title">БАТЭ - Торпедо</h3>
            <p class="product__description">25.03.2020, 19:00 начало, групповой этап Чемпионата Беларуси (1-я игра)</p>
          </div>
          <footer class="product__footer">
            
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">Борисов-арена</span>
                
              </div>
              <button class="btn product__btn" type="button">купить билет</button>
            </div>
          </footer>
        </div>
      </div>
							
       <div class="catalog__item">
        <div class="match catalog__match">
        <div class="catalog__match__head">  
            <div class="team__atr">
              <img width="250" border="0" height="230" src="images/dinamo-minsk.png" alt="" id="team1" class="team__img">
              VS
            
              <img width="200" border="0" height="230" src="images/logo_fcbate_new_2020.svg" alt="" id="team1" class="team__img">
              
            </div>
          
        </div>  
            
          <div class="product__content">
            <h3 class="product__title">Динамо - Батэ</h3>
            <p class="product__description">01.04.2020, 18:00 начало, полуфинал кубка Беларуси (ответная игра)</p>
          </div>
          <footer class="product__footer">
            
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">стадион Динамо</span>
                
              </div>
              <button class="btn product__btn" type="button">купить билет</button>
            </div>
          </footer>
        </div>
      </div>
        
    </div>
  </div>
</section>
				

<footer>
    <a href="https://www.fcbate.by" class="nav copyright">© Футбольный клуб БАТЭ </a> 
</footer>


</body>
</html>