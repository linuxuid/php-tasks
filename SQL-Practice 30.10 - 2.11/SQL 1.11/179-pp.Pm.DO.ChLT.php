<?php
include 'connect_db.php';

/*
 * Цепочка связанных таблиц
 */

/* Задача 1
 * Пусть товары принадлежат определенной подкатегории, а подкатегории
 * принадлежат определенной категории. Распишите структуру хранения.
 */

/* Ответ задача 1 :
 * subcategory - `id` (AUTO_INCREMENT), `name` (animals, was grown)
 * categories = `id` (AUTO_INCREMENT), `name` (fruits, meat), `subcategory` ( 2 = fruits, 1 = meat )
 * products = `id` (AUTO_INCREMENT), `name` (chicken, apple, banana, pork, fish),
 * `category_id` (chicken = 2, apple = 1, banana = 1, pork = 2, fish = 2)
 */

/* Задача 2
 * Напишите запрос, который достанет товары, вместе с их подкатегориями и категориями.
 */

$query = 'SELECT products.name, 
categories.name as category_name,
subcategory.name as subcategory_name
FROM products
LEFT JOIN categories ON categories.id = products.category_id
LEFT JOIN subcategory ON subcategory.id = categories.subcategory
';
$res = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($res);

/* Задача 3
 * Напишите запрос, который достанет подкатегории вместе с их категориями.
 */

$query = 'SELECT 
subcategory.name as subcategory_name,
categories.name as categories_name
FROM subcategory 
LEFT JOIN categories ON categories.subcategory = subcategory.id 
';
$res = mysqli_fetch_assoc(mysqli_query($link,$query)) or die($link);
var_dump($res);
?>