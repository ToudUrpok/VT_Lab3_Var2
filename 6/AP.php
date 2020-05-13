<?php  
    require "follow_user.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="AP_css/AP_style.css">
        <link rel="stylesheet" href="fonts/font-awesome.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script,700&amp;subset=cyrillic-ext">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <title>Батэ</title>
    </head>
    <body>
        <header class="header">
            <div class="container_h">
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
        
        
        <div class="container">    
            <form autocomplete="off">
            <fieldset>
                <img src="images/AutorisationIcon.png">
                <div class="dws-input">
                    <input type="text" name="username" placeholder="Введите логин" autocomplete="on"/>
                </div>
                <div class="dws-input">
                    <input type="password" name="password" placeholder="Введите пароль"/>
                </div>
                <input class="dws-submit" type="submit" name="submit" value="ВОЙТИ"/><br />
                <a href="#">Восстановить пароль</a>
            
                <div class="dws-social">
                    <a href="https://vk.com/"> <i class="fa fa-vk" aria-hidden="true"></i></a>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
            </fieldset>
            </form>
                <footer>
                <a href="https://www.fcbate.by" class="nav copyright">© Футбольный клуб БАТЭ </a> 
                </footer>
            
            
        </div>
    </body>
</html>