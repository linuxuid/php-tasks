<?php
include 'connect_db.php';

/*
 * Родственные связи данных в PHP
 */

/* Задача 1
 * Пусть у нас есть категории. Каждая категория может
 * принадлежать родительской категории, та в свою
 * очередь своей родительской и так далее. Распишите структуру хранения.
 */

/* Структура хранения
TABLE category
id    name    parent_category_id
1    categ1         2
2    categ2         3
3    categ3         1
4    categ4         null

TABLE main_category
id

 */

/* Задача 2
 * Напишите запрос, который достанет категорию вместе с ее родительской категорией.
 */

$query =
    'SELECT * FROM category 
    LEFT JOIN category as parent_category 
    ON parent_category.parent_category_id=category.id';
$result = mysqli_query($link,$query) or die($link);


/* Задача 3
 * Напишите запрос, который достанет категорию вместе с ее родителем и прародителем.
 */

$query=
    'SELECT * FROM category
    LEFT JOIN category as par_categ
    ON par_categ.parent_category_id = category.progenitor
';
$result = mysqli_query($link,$query) or die($link);

/* Задача 4
 * Напишите запрос, который достанет категорию вместе
 * с ее родителем, прародителем и прапрародителем.
 */

$query =
    'SELECT * FROM category
LEFT JOIN category as great_progen
ON great_progen.progenitor = category.id
    ';

$result = mysqli_query($link,$query) or die($link);

?>