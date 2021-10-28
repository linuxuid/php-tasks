<?php
include '164-pp.Pm.DB.PM.php';

/*
 * Поля выборки при SQL запросе в PHP
 */

/* Задача 1
 * Выберите из таблицы users имя, возраст и зарплату для каждого работника.
 */

$query = 'SELECT name, age, salary FROM users';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 2
 * Выберите из таблицы users имена всех работников.
 */

$query = 'SELECT name FROM users';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

?>