<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            a {
                color: red;
            }
            #task {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="task">
            Вариант 14: в произвольном тексте все e-mail адреса вывести красным цветом и привести к виду <a href="mailto:EMAIL">EMAIL</a>. Также список e-mail адресов сохранить в файл. Текст вводить через форму.
        </div>
        
        <form id="textForm">
            <p>
                <input name="button" type="submit" value="обработать текст" form="textForm"/>
            </p>
            <p>
                <textarea name="text" cols="90" rows="20" placeholder="Введите текст" form="textForm"  autofocus required></textarea>
            </p>
        </form>

        <?php
            define('EMAILREGEXPR', "/\w+(\.\w+)*@\w+(\.\w+)+/i");
        
            if (isset($_GET['button'])) {
                processText($_GET['text']);
            }
        
            function processText($text)
            {    
                echo "<p>" . $text . "</p>";
                $emails = preg_grep(EMAILREGEXPR, preg_split("/(\s|\t)+/", $text));
                foreach ($emails as $email) {
                    file_put_contents("EmailsList.txt", $email . "\n", FILE_APPEND);
                }
                $processedText = preg_replace(EMAILREGEXPR, '<a style="color: red;" href="mailto:$0">'. "$0" .'</a>', $text);
                echo "<p>" . $processedText . "</p>";
            }
        ?>
    </body>
</html>