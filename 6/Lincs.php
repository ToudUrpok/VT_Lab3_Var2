<?php
    echo '<link rel="stylesheet" href="' . chooseStyle() . '"/>';
    displayNav();

    function chooseStyle() {
        switch (getPageName()) {
            case 'index':
              return 'MP_css/MP_style.css';
              break;
            case 'AP':
              return 'AP_css/AP_style.css';
              break;
            case 'TTP':
              return 'TTP_css/TTP_style.css';
              break;
            case 'HIP':
              return 'HIP_css/HIP_style.css';
              break;
            case 'GC':
              return 'GC_css/GC_style.css';
              break;
          }
    }

    function displayNav() {
        $pName = getPageName();
        echo '<a class="' . ($pName === 'index' ? 'active' : 'nav__link') . '" href="index.php">Главная</a>';
        echo '<a class="' . ($pName === 'AP' ? 'active' : 'nav__link') . '" href="AP.php">Авторизация</a>';
        echo '<a class="' . ($pName === 'TTP' ? 'active' : 'nav__link') . '" href="TTP.php">Турнирная таблица</a>';
        echo '<a class="' . ($pName === 'HIP' ? 'active' : 'nav__link') . '" href="HIP.php">История</a>';
        echo '<a class="' . ($pName === 'GC' ? 'active' : 'nav__link') . '" href="GC.php">Матчи</a>';
    }
    
    function getPageName() {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        $url = $url[count($url) - 1];
        $url = explode('.', $url);
        $url = $url[0];
        return $url; 
    }
?>