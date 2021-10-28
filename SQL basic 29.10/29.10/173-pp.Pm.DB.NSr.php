<?php
include "164-pp.Pm.DB.PM.php";

/*
 * Сортировка записей через SQL запрос в PHP
 */

/* Задача 1
 * Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты.
 */

$query = "SELECT * FROM users ORDER BY salary";
mysqli_query($link,$query) or die ($link);


/* Задача 2
 * Достаньте всех юзеров и отсортируйте их по убыванию зарплаты.
 */

$query = "SELECT * FROM users ORDER BY salary DESC";
mysqli_query($link,$query) or die ($link);

/* Задача 3
 * Достаньте всех юзеров и отсортируйте их по имени.
 */

$query = "SELECT * FROM users ORDER BY name";
mysqli_query($link,$query) or die ($link);

/* Задача 4
 * Достаньте юзеров с зарплатой 500 и отсортируйте их по возрасту.
 */

$query = "SELECT * FROM users WHERE salary=500 ORDER BY age";
mysqli_query($link,$query) or die ($link);

/* Задача 5
 * Достаньте всех юзеров и отсортируйте их по имени и по зарплате.
 */

$query = "SELECT * FROM users ORDER BY name, salary";
mysqli_query($link,$query) or die ($link);


?>