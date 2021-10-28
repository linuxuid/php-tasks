<?php
include '164-pp.Pm.DB.PM.php';
/*
 *
 * Удаление записей через SQL запрос в PHP
 */

/* Задача 1
 * Удалите юзера с id, равным 7.
 */

$query = "DELETE FROM users WHERE id=7";
mysqli_query($link,$query) or die($link);


/* Задача 2
 * Удалите всех юзеров, у которых возраст 23 года.
 */

$query = "DELETE FROM users WHERE age=23";
mysqli_query($link,$query) or die($link);

/* дача 3
 * Удалите всех юзеров.
 */

$query = "DELETE FROM users";
mysqli_query($link,$query) or die($link);

?>