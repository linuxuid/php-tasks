<?php

include '164-pp.Pm.DB.PM.php';

/*
 * Выборка записей при SQL запросе к базе в PHP
 */

/* Задача 1
 * Выберите юзера с id, равным 3.
 */

$query = "SELECT * FROM users WHERE id=3";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
$row = mysqli_fetch_assoc($result);
var_dump($row);

/* Задача 2
 * Выберите юзеров с зарплатой 900.
 */

$query = "SELECT * FROM users WHERE salary=900";
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($row);

/* Задача 3
 * Выберите юзеров в возрасте 23 года.
 */

$query = "SELECT * FROM users WHERE age=23";
$row = mysqli_fetch_assoc(mysqli_query($link, $query)) or die(mysqli_error($link));
var_dump($row);

/* Задача 4
 * Выберите юзеров с зарплатой более 400
 */

$query = "SELECT * FROM users WHERE salary>400";
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($row);

/* Задача 5
 * Выберите юзеров с зарплатой равной или большей 500.
 */

$query = "SELECT * FROM users WHERE salary=>500";
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($row);

/* Задача 6
 * Выберите юзеров с зарплатой НЕ равной 500
 */

$query = "SELECT * FROM users WHERE salary!=500";
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($row);

/* Задача 7
 * Выберите юзеров с зарплатой равной или меньшей 500.
 */

$query = "SELECT * FROM users WHERE salary<=500";
$row = mysqli_fetch_assoc(mysqli_query($link,$query)) or die(mysqli_error($link));
var_dump($row);