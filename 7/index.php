<!DOCTYPE html>
<html>
	<head>
		<title>Lab7_Var4</title>
		<meta charset="utf-8">
        <style type="text/css">
            BUTTON {
                margin-left:20px;
            }
            INPUT, TEXTAREA {
                margin-left: 10px;
            }
            #message {
                width: 250px;
                height: 150px;
            }
            #work_block {
                margin-bottom: 30px;
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
            Вариант 4: Написать скрипт, отправляющий полученное через форму письмо указанному адресату. Для подтверждения отправки создать текстовую и (или) графическую капчу.
        </div>
        
        <?php
            error_reporting(-1);
            ini_set('display_errors', 'On');
            set_error_handler("var_dump");
            $receiver= isset($_POST['send'])? $_POST['receiver']: "";
            $subject = isset($_POST['send'])? $_POST['subject']: "";
            $message = isset($_POST['send'])? $_POST['message']: "";
        ?>
        
		<div id="work_block">
			<form method="POST" accept-charset="utf-8">	
                <p>
					<label for="receiver">Адресат: </label><br/>
					<input type="email" name="receiver" id="receiver" required value="<?php echo $receiver; ?>"/>
			     </p>
                <p>
                    <label for="subject">Тема:</label><br/>
                    <input type="text" name="subject" id="subject"required value="<?php echo $subject; ?>"/>
                </p>
                <p>
                    <label for="message">Текст сообщения:</label><br/>
                    <textarea name="message" id="message" required><?php echo $message; ?></textarea>
                </p>
                <p>
                    <label for="message">Введите число с картинки:</label><br/>
                    <img src="captcha.php" />
                    <input class="input" type="text" name="captcha" required/>
                </p>
                <p>
                    <button type="submit" name="send">Отправить</button>
                </p>        
			</form>
		</div>
		
        <?php
            define('SERVEREMAIL', 'coolserver@mail.ru');
            if(isset($_POST['send']))
            {
                if (checkCaptcha())
                {
                    $headers = "From: " . SERVEREMAIL . "\r\n" .
                        'Reply-To: ' . SERVEREMAIL . "\r\n" .
                        'X-Mailer: PHP/' . phpversion(); 
                    if (mail($receiver, $subject, $message, $headers))
                    {
                        echo "<h3>Сообщение отправлено</h3>";
                    }
                    else
                    {
                        echo "<h3>При отправке сообщения возникла ошибка</h3>";
                    }
                }
            } 
        
            function checkCaptcha()
            {
                session_start();
                return (md5($_POST['captcha']) == $_SESSION['captcha']);
            }
        
        ?>
	</body>
</html>