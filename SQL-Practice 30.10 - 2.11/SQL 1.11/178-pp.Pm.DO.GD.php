<?php
include 'connect_db.php';
/*
 * Получении данных из связанных таблиц в PHP
 */

/* Задача 1
 * Пусть у вас есть таблица с товарами и таблица с их категориями.
 * Напишите запрос, который достанет названия товаров вместе с их категориями.
 */

$query = 'SELECT products.name, categories.name as categories_name 
FROM products
LEFT JOIN categories ON categories.id = products.category_id';
$res = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);

?>