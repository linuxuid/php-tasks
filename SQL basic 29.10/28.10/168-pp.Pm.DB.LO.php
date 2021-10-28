<?php
include '164-pp.Pm.DB.PM.php';

/*
 * Логические операции в SQL запросе в PHP
 */

/* Задача 1
 * Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно).
 */

$query = 'SELECT * FROM users WHERE age>25 AND age<=28 ';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($row);

/* Задача 2
 * Выберите юзера user1.
 */

$query = 'SELECT * FROM users WHERE age=23 AND salary=400';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 3
 * Выберите юзеров user1 и user2.
 */

$query = 'SELECT * FROM users WHERE id<3';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 4
 * Выберите всех, кроме юзера user3.
 */

$query = 'SELECT * FROM users WHERE id<>3';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 5
 * Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000.
 */

$query = 'SELECT * FROM users WHERE age=27 OR salary=1000';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 6
 * Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400.
 */

$query = 'SELECT * FROM users WHERE age=27 OR salary = 400';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 7
 * Выберите всех юзеров в возрасте от 23 лет (включительно)
 * до 27 лет (не включительно) или с зарплатой 1000.
 */

$query = 'SELECT * FROM users WHERE age=>23 AND age>27 OR salary = 1000';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);

/* Задача 8
 * Выберите всех юзеров в возрасте от 23 лет
 * до 27 лет или с зарплатой от 400 до 1000.
 */

$query = 'SELECT * FROM users WHERE (age>23 AND age<27) OR (salary>400 AND salary<1000)';
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($row);
?>