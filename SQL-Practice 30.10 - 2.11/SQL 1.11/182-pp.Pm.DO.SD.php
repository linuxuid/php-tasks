<?php
include "connect_db.php";

/*
 * Несколько потомков в родственных связях в PHP
 */

/* Задача 1
 * Пусть у нас есть юзеры. Каждый юзер имеет отца и мать.
 * Распишите структуру хранения.

TABLE users
id 	name 	parents_id
1 	user1 	5
2 	user2 	6
3 	user3 	7
4 	user4 	8
5 	parents1 	NULL
6 	parents2 	NULL
7 	parents3 	NULL
8 	parents4 	NULL
*/


/* Задача 2
 * Напишите запрос, который достанет юзера вместе
 * с его отцом и матерью.
 */

$query = 'SELECT 
    users.name as user_name,
    parents.name as parents_name
    FROM 
        users
    LEFT JOIN users as parents ON parents.id = users.parents_id
    ';
$sql = mysqli_query($link,$query) or die($link);

foreach ($sql as $key => $res) {
    print_r($res);
}

?>