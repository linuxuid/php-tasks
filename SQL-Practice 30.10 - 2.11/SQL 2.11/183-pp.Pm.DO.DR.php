<?php

/*
 * Двойная связь с одной таблицей в PHP
 */

/* Задача 1
 * Пусть у нас есть юзеры. Каждый юзер имеет отца и мать.
 * Распишите структуру хранения.

TABLE users
id 	name
1 	user1
2 	user2
3 	user3
4 	user4

TABLE parents
id 	name 	father_id   name2 	    mother_id
1 	father1 	1 	    mother1 	    2
2 	father2 	2 	    mother2 	    3
3 	father3 	3 	    mother3 	    4
4 	father4 	4 	    mother4 	    1
 */

$query = "SELECT 
    users.name as user_name, 
    parents.name as parent_name,
    parents.name2 as parent_name2
FROM parents
LEFT JOIN users ON users.id=parents.father_id
LEFT JOIN users as users_name ON users_name.id=parents.mother_id
";


?>