<?php

class LoginSystem
{    
    public static function sign(string $login, string $password, string $password_confirm)
    {
        $mysqli = LoginSystem::db_connect('lab_5');

        $queries['select_all_users'] = "SELECT * FROM `users`";
        $queries['insert_new_user'] = "INSERT INTO `users` VALUES (NULL, '$login', SHA1('$password'))";
        
        if ($select_all_users_result = $mysqli->query($queries['select_all_users']))
        {         
            $user_already_exists = false;
            
            while ($table_row = $select_all_users_result->fetch_assoc())
            {                                  
                if ($table_row['login'] == $login)
                {
                    if ($table_row['password'] == sha1($password))
                    {
                        print("You have signed in successfully!");
                    }
                    else
                    {
                       print("User with such login is already exists!"); 
                    }
                    $user_already_exists = true;
                    break;
                }
            }        
            $select_all_users_result->free();

            if (!$user_already_exists)
            {
                if ($password == $password_confirm)
                {
                    $result = $mysqli->query($queries['insert_new_user']) or 
                        die("Connection error: " . mysqli_error($mysqli));
                    if ($result)
                    {
                       print("A new user was successfully added to the DB!"); 
                    }
                }            
                else
                {
                    die("Entered passwords do not match!");
                }
            }
        }

        $mysqli->close();
    }
    
    public static function changePass(string $login, string $password, string $password_confirm)
    {
        if ($password != $password_confirm)
        {
            die("Entered passwords do not match!");
        }
        else
        {
            $mysqli = LoginSystem::db_connect('lab_5');
        
            $queries['select_all_users'] = "SELECT * FROM `users`";
            
            if ($select_all_users_result = $mysqli->query($queries['select_all_users']))
            {
                $user_already_exists = false;
                
                while ($table_row = $select_all_users_result->fetch_assoc())
                {                                  
                    if ($table_row['login'] == $login)
                    {
                        $user_already_exists = true;
                        $id = $table_row['id'];
                        $queries['update_user'] = "UPDATE `users` SET `password` = SHA1('$password') WHERE `users`.`id` = $id";
                        
                        $result = $mysqli->query($queries['update_user']) or 
                        die("Connection error: " . mysqli_error($mysqli));
                        if ($result)
                        {
                           print("Password is successfully changed!"); 
                        }
                        break;
                    }
                }        
                $select_all_users_result->free();
                if (!$user_already_exists)
                {
                    print("Such user is not exists!");
                }
            }
             
            $mysqli->close();
        }
    }
    
    private static function db_connect(string $db_name)
    {
        define('MYSQL_SERVER', 'localhost');
        define('MYSQL_USER', 'root');
        define('MYSQL_PASSWORD', 'root');

        $mysqli = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, $db_name);       

        $mysqli->query("SET CHARACTER SET 'UTF8'");
        $mysqli->query("SET NAMES 'UTF8'");

        if ($mysqli->connect_errno)
        {
            die("Connection error: " . $mysqli->connect_errno);
        }

        return $mysqli;
    }
}

?>