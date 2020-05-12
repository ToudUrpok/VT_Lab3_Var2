<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            body{
                background-color: beige;
            }
            input{
                margin-top: 10px;
                margin-bottom: 10px;
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
            Вариант 7: написать скрипт, получающий через форму имя пользователя, пароль и подтверждение пароля. Если такого пользователя ещё нет в БД, а пароль и его подтверждение совпадают, необходимо добавить в БД имя пользователя и пароль в виде хэша sha1. А также добавить функцию изменения пароля.
        </div>
        
        <form action="action.php" method="POST">
                <p>Login:</p>
            <input type="text" name="login" required/>
                <p>Password:</p>
            <input type="text" name="password" required/>
                <p>Confirm password:</p>
            <input type="text" name="password_confirm" required/>
            <p>    <!-- Button -->
            <input type="submit" name="sign_in" value="Sign In/Up"/> 
                <!-- Button -->
            <input type="submit" name="change_pass" value="Change password"/>
            </p>
        </form>
    </body>
</html>