<?php
include '164-pp.Pm.DB.PM.php';
/*
 * Обновление записей через SQL запрос в PHP
 */

/* Задача 1
 * Используя созданный ранее вами дамп таблицы users приведите ее в исходное состояние.
 */

/*
 * Table -> import -> done
 */

/* Задача 2
 * Юзеру с id 4 поставьте возраст 35 лет.
 */

$query = 'UPDATE users SET age=35 WHERE id=4';
mysqli_query($link,$query) or die ($link);

/* Задача 3
 * Всем, у кого зарплата 500, сделайте ее 700.
 */

$query = 'UPDATE users SET salary=700 WHERE salary=500';
mysqli_query($link,$query) or die ($link);

/* Задача 4
 * Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
 */
$query = 'UPDATE users SET age=23 WHERE id>2 AND id<5';
mysqli_query($link,$query) or die ($link);

?>