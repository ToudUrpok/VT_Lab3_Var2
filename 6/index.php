<?php  
    require "follow_user.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="MP_css/MP_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script,700&amp;subset=cyrillic-ext">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <title>Батэ</title>
</head>
<body>


<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">Сайт ФК БАТЭ</div>
            <?php  
               require "Lincs.php"; 
            ?>
        </div>
    </div>
</header>

<div class="intro">
    <div class="container__i">
        
            <h2 class="intro__title">Добро пожаловать!</h2>
            <img id="logo__image" src="images/Logo.png" alt="Логотип клуба">
            <footer>
                <a href="https://www.fcbate.by" class="nav copyright">© Футбольный клуб БАТЭ </a> 
            </footer>
        
        
    </div>  
</div>
    
</body>
</html>
