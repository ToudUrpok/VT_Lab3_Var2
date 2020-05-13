<?php  
    require "follow_user.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="TTP_css/TTP_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script,700&amp;subset=cyrillic-ext">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <title>Батэ</title>
</head>
<body>


<header class="header">
    <div class="container">
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
    
<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h2 class="intro__title">Турнирная таблица сезона 2019</h2>
   <table id="tournaments-tbl" class="tournaments-tbl">
            <tbody><tr>
                <th colspan="2" width="250"></th>
                <th title="игры">И</th>
                <th title="выигрыши">В</th>
                <th title="ничьи">Н</th>
                <th title="поражения">П</th>
                <th width="80" title="разность мячей">М</th>
                <th title="очки">О</th>
                <th title="1-й круг" width="50">1-й</th>
                <th title="2-й круг" width="50">2-й</th>
                <th title="3-й круг" width="50">3-й</th>
            </tr>
            
                            <tr class="stat-row">
                    <td class="stat-position left" width="24">1.</td>
                    <td class="stat-team left" width="174">Динамо Бр</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">23</td>
                    <td class="stat-standoff">6</td>
                    <td class="stat-loses">1</td>
                    <td class="stat-goals">70 - 22</td>
                    <td class="stat-points">75</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014958" class="home-match">0 : 1</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014973" class="">1 : 1</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row" id="leader">
                    <td class="stat-position left" width="24">2.</td>
                    <td class="stat-team left" width="174">БАТЭ</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">22</td>
                    <td class="stat-standoff">4</td>
                    <td class="stat-loses">4</td>
                    <td class="stat-goals">61 - 21</td>
                    <td class="stat-points">70</td>
                    <td>***</td>
                    <td>***</td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">3.</td>
                    <td class="stat-team left" width="174">Шахтер</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">20</td>
                    <td class="stat-standoff">5</td>
                    <td class="stat-loses">5</td>
                    <td class="stat-goals">59 - 21</td>
                    <td class="stat-points">65</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014966" class="home-match">3 : 1</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014981" class="">2 : 2</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">4.</td>
                    <td class="stat-team left" width="174">Динамо Мн</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">15</td>
                    <td class="stat-standoff">5</td>
                    <td class="stat-loses">10</td>
                    <td class="stat-goals">43 - 39</td>
                    <td class="stat-points">50</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014969" class="">2 : 1</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014984" class="home-match">3 : 0</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">5.</td>
                    <td class="stat-team left" width="174">Ислочь</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">13</td>
                    <td class="stat-standoff">8</td>
                    <td class="stat-loses">9</td>
                    <td class="stat-goals">42 - 36</td>
                    <td class="stat-points">47</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014967" class="">0 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014982" class="home-match">2 : 4</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">6.</td>
                    <td class="stat-team left" width="174">Торпедо-БелАЗ</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">13</td>
                    <td class="stat-standoff">6</td>
                    <td class="stat-loses">11</td>
                    <td class="stat-goals">41 - 36</td>
                    <td class="stat-points">45</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014970" class="home-match">4 : 1</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014985" class="">2 : 1</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">7.</td>
                    <td class="stat-team left" width="174">Городея</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">12</td>
                    <td class="stat-standoff">8</td>
                    <td class="stat-loses">10</td>
                    <td class="stat-goals">31 - 29</td>
                    <td class="stat-points">44</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014961" class="">0 : 1</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014976" class="home-match">2 : 1</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">8.</td>
                    <td class="stat-team left" width="174">Славия</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">10</td>
                    <td class="stat-standoff">7</td>
                    <td class="stat-loses">13</td>
                    <td class="stat-goals">35 - 40</td>
                    <td class="stat-points">37</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014959" class="">2 : 1</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014974" class="home-match">4 : 0</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">9.</td>
                    <td class="stat-team left" width="174">Минск</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">9</td>
                    <td class="stat-standoff">9</td>
                    <td class="stat-loses">12</td>
                    <td class="stat-goals">36 - 44</td>
                    <td class="stat-points">36</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014960" class="home-match">1 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014975" class="">2 : 3</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">10.</td>
                    <td class="stat-team left" width="174">Неман</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">10</td>
                    <td class="stat-standoff">6</td>
                    <td class="stat-loses">14</td>
                    <td class="stat-goals">28 - 37</td>
                    <td class="stat-points">36</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014963" class="">1 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014978" class="home-match">1 : 0</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">11.</td>
                    <td class="stat-team left" width="174">Слуцк</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">9</td>
                    <td class="stat-standoff">7</td>
                    <td class="stat-loses">14</td>
                    <td class="stat-goals">29 - 46</td>
                    <td class="stat-points">34</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014964" class="home-match">3 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014979" class="">3 : 0</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">12.</td>
                    <td class="stat-team left" width="174">Энергетик-БГУ</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">8</td>
                    <td class="stat-standoff">9</td>
                    <td class="stat-loses">13</td>
                    <td class="stat-goals">52 - 66</td>
                    <td class="stat-points">33</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014957" class="">4 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014972" class="home-match">4 : 1</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">13.</td>
                    <td class="stat-team left" width="174">Витебск</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">8</td>
                    <td class="stat-standoff">7</td>
                    <td class="stat-loses">15</td>
                    <td class="stat-goals">24 - 39</td>
                    <td class="stat-points">31</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014968" class="home-match">3 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014983" class="">2 : 1</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">14.</td>
                    <td class="stat-team left" width="174">Дняпро</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">8</td>
                    <td class="stat-standoff">6</td>
                    <td class="stat-loses">16</td>
                    <td class="stat-goals">32 - 42</td>
                    <td class="stat-points">30</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014986" class="home-match">2 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014987" class="">1 : 0</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">15.</td>
                    <td class="stat-team left" width="174">Гомель</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">7</td>
                    <td class="stat-standoff">8</td>
                    <td class="stat-loses">15</td>
                    <td class="stat-goals">44 - 50</td>
                    <td class="stat-points">29</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014965" class="">2 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014980" class="home-match">1 : 1</a></td>
                    <td>***</td>
                </tr>
                                            <tr class="stat-row">
                    <td class="stat-position left" width="24">16.</td>
                    <td class="stat-team left" width="174">Торпедо Мн</td>
                    <td class="stat-games">30</td>
                    <td class="stat-wins">1</td>
                    <td class="stat-standoff">3</td>
                    <td class="stat-loses">26</td>
                    <td class="stat-goals">4 - 63</td>
                    <td class="stat-points">6</td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32014962" class="home-match">1 : 0</a></td>
                    <td><a href="https://fcbate.by/ru/season/calendar/id32015329" class="">3 : 0</a></td>
                    <td>***</td>
                </tr>
                                    </tbody></table>
                <footer>
                <a href="https://www.fcbate.by" class="nav copyright">© Футбольный клуб БАТЭ </a> 
            </footer>

        </div>
    </div>
    </div>

</body>
</html>
