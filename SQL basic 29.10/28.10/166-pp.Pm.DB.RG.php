<?php
/*
 * Получение результата при SQL запросе в PHP
 */

/* Задача 1
 * С помощью описанного цикла получите и выведите
 * через var_dump на экран массив всех работников.
 */
$host = 'localhost'; // host
$user = 'root'; // user
$pass = ''; // pass
$name = 'mydb'; // database

$link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {

}
echo "<pre>";
var_dump($data);

/* Задача 2
 * Из полученного результата получите первого работника.
 * Через echo выведите на экран его имя.
 */

echo 'name: ' . $data[0]['name'] . "<br>";

/* Задача 3
 * Из полученного результата получите второго работника.
 * Через echo выведите на экран его имя и возраст.
 */

echo 'name: ' . $data[1]['name']  . '<br>' . 'age : ' . $data[1]['age'] . "<br>";

/* Задача 4
 * Из полученного результата получите третьего работника.
 * Через echo выведите на экран его имя, возраст и зарплату.
 */

echo 'name: ' . $data[2]['name'] . "<br>" . 'age: ' . $data[2]['age'] .  "<br>" .'salary: ' .$data[2]['salary'];
?>