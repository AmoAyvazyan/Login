<?php

$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($pass)<5 || mb_strlen($pass)>12){
    echo "Invalid password length (5 to 12 characters)";
    exit();
}
$pass = md5($pass."asjkajd32523232");

require_once 'database.php';

$mysql->query("INSERT INTO `users`(`login`, `name`, `email`, `pass`)
VALUES ('$login','$name','$email','$pass')");

$mysql->close();

header('Location: ../index.php ');