<?php

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'boardDesc';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);

if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}



?>