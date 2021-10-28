<?php
include "164-pp.Pm.DB.PM.php";
/*
 * Подсчет количества через SQL запрос в PHP
 */

/* Задача 1
 * Подсчитайте всех юзеров с зарплатой 300.
 */

$query = 'SELECT COUNT(*) as count FROM users WHERE salary=300';
$result = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($result);

/* Задача 2
 * Подсчитайте всех юзеров с зарплатой 300 или возрастом 23.
 */

$query = 'SELECT COUNT(*) as count FROM users WHERE salary>300 or age=23';
$result = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($result);

?>