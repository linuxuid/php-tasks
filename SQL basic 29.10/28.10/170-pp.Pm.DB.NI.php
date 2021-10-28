<?php
include "164-pp.Pm.DB.PM.php";
/*
 * Вставка записей через SQL запрос в PHP
 */

/* Задача 1
 * Добавьте нового юзера 'user7', 26 лет, зарплата 300.
 */

$query = "INSERT INTO users (name,age,salary) 
VALUES 
       ('user1','26','300'),
        ('user2','23','200'),
        ('user3','25','400'),
        ('user4','27','500'),
        ('user5','26','700'),
        ('user6','30','700')";
mysqli_query($link,$query) or die(mysqli_error($link));
?>


