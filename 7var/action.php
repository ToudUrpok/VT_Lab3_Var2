<?php

include 'functions.php';

$login = $_POST['login'];
if ((strlen($login) < 3) || (strlen($login) > 30))
{
    die("The length of the login must be at least 3 characters, at most 26 characters!");
}

$password = $_POST['password'];
if ((strlen($password) < 3) || (strlen($password) > 30))
{
    die("The length of the password must be at least 3 characters, at most 64 characters!");
}

$password_confirm = $_POST['password_confirm'];
if ((strlen($password_confirm) < 3) || (strlen($password_confirm) > 30))
{
    die("Entered passwords do not match!");
}

if (isset($_POST['sign_in']))
{
   LoginSystem::sign($login, $password, $password_confirm); 
}

if (isset($_POST['change_pass']))
{
   LoginSystem::changePass($login, $password, $password_confirm); 
}
?>