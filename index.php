<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            body{
                background-color: beige;
            }
            #task{
                font-size: 20px;
                font-family: cursive;
                color: blue;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div id="task">
            Вариант 5: написать скрипт, собирающий статистику по ip-адресам, с которых посетители заходили на сайт. Выводить результаты в виде HTML-таблицы со списком ip-аресов, отсортиро-ванным по убыванию количества посещений с каждого адреса. 
        </div>

        <?php
            define('HOST','localhost'); 
            define('DATABASE', 'lab_8');
            define('USER', 'root');
            define('PASSWORD', 'root');
 
            $link = mysqli_connect(HOST, USER, PASSWORD, DATABASE) 
                or die("Ошибка " . mysqli_error($link));
        
            $query ="SELECT id, INET_NTOA(ip) As string, amount FROM visitors_ip_addressess";
            $result = mysqli_query($link, $query) or 
                die("Ошибка " . mysqli_error($link));
            if ($result)
            {
                $address = $_SERVER['REMOTE_ADDR'];
                $addresses;
                $amounts;

                $rows = mysqli_num_rows($result);
                $isExists = false;
                for ($i = 0 ; $i < $rows ; $i++)
                {
                    $row = mysqli_fetch_row($result);
                    $addresses[$row[0]] = $row[1];
                    if ($address == $row[1])
                    {
                        $amounts[$row[0]] = $row[2] + 1;
                        changeAmount($row[0], $amounts[$row[0]], $link);
                        $isExists = true;    
                    }
                    else
                    {
                        $amounts[$row[0]] = $row[2];
                    }
                }
                mysqli_free_result($result);
                
                if (!$isExists)
                {
                    insertIP($address, $link);
                    $index = count($amounts);
                    $addresses[$index] = $address;
                    $amounts[$index] = 1;
                }
                
                mysqli_close($link);
                
                arsort($amounts, SORT_NUMERIC);
                    
                echo "<table ><tr><th>Amount</th><th>IP</th></tr>";
                    foreach ($amounts as $id => $amount)
                    {
                        echo "<tr>";
                            echo "<td>$amount</td>";
                            echo "<td>$addresses[$id]</td>";
                        echo "</tr>";
                    }
                echo "</table>";
            }
        
            function changeAmount($id, $amount, &$link)
            {
                $query = "UPDATE `visitors_ip_addressess` SET `amount` = '$amount' WHERE `visitors_ip_addressess`.`id` = '$id'";
                mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            }
        
            function insertIP($ip, &$link)
            {
                $amount = 1;
                $query = "INSERT INTO `visitors_ip_addressess` VALUES (NULL, INET_ATON('$ip'), '$amount')";
                mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            }
        ?>
    </body>
</html>
