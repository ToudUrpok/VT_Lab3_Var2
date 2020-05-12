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
            Общее задание
        </div>

        <?php
            define('HOST','localhost'); 
            define('DATABASE', 'db_authors');
            define('USER', 'root');
            define('PASSWORD', 'root');
 
            $link = mysqli_connect(HOST, USER, PASSWORD, DATABASE) 
                or die("Ошибка " . mysqli_error($link));
        
            $query ="SELECT * FROM registrated_authors";
            $result = mysqli_query($link, $query) or 
                die("Ошибка " . mysqli_error($link));
            if ($result)
            {
                $authors;
                $rows = mysqli_num_rows($result);
                
                for ($i = 0 ; $i < $rows ; $i++)
                {
                    $row = mysqli_fetch_row($result);
                    $authors[$row[0]] = $row[1];
                }
                mysqli_free_result($result);
        
                $query ="SELECT * FROM publications";
                $result = mysqli_query($link, $query) or 
                    die("Ошибка " . mysqli_error($link));
                if ($result)
                {
                    $publications;
                    $rows = mysqli_num_rows($result);

                    for ($i = 0 ; $i < $rows ; $i++)
                    {
                        $row = mysqli_fetch_row($result);
                        $publications[$row[4]] = array($row[1], $row[2], $row[3]); 
                    }
                    mysqli_free_result($result);
                    ksort($publications, SORT_STRING);
                    
                    echo "<table ><tr><th>Дата</th><th>Автор</th><th>Публикация</th><th>Ссылка</th></tr>";
                    foreach ($publications as $title => $item)
                    {
                        echo "<tr>";
                            echo "<td>$title</td>";
                            $author = $authors[$item[0]];
                            echo "<td>$author</td>";
                            echo "<td>$item[1]</td>";
                            echo "<td><a href='$item[2]'>$item[2]</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            
            mysqli_close($link);
        ?>
    </body>
</html>