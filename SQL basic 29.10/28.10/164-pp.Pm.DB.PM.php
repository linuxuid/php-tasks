<?php
/*
 * Подготовительные манипуляции для работы с SQL в PHP
 */

/* Задача 1
 * Скопируйте и запустите у себя приведенный тестовый код.
 */

$host = 'localhost'; // host
$user = 'root'; // user
$pass = ''; // pass
$name = 'mydb'; // database

$link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

echo "<pre>";
var_dump($result);
?>