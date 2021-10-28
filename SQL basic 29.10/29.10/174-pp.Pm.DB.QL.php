<?php

include '164-pp.Pm.DB.PM.php';

/*
 * Ограничение количества записей в SQL в PHP
 */

/* Задача 1
 * Получите первых 4 юзера.
 */

$query = "SELECT * FROM users LIMIT 4";
mysqli_query($link,$query) or die ($link);

/* Задача 2
 * Получите юзеров со второго, 3 штуки.
 */

$query = 'SELECT * FROM users WHERE id>1 LIMIT 3';
mysqli_query($link,$query) or die ($link);

/* Задача 3
 * Отсортируйте юзеров по возрастанию зарплаты
 * и получите первых 3 работника из результата сортировки.
 */

$query = 'SELECT * FROM users ORDER BY salary LIMIT 3';
mysqli_query($link,$query) or die ($link);

/* Задача 4
 * Отсортируйте юзеров по убыванию
 * зарплаты и получите первых 3 юзера из результата сортировки.
 */

$query = 'SELECT * FROM ORDER BY salary DESC LIMIT 3';
mysqli_query($link,$query) or die($link);


?>