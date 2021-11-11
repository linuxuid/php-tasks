<?php
require_once 'connect_db.php';

/*
 * Функция для вычисления возраста от даты рождения
 */

function getAge($birthday) {
    $diff = date('Ymd') - date('Ymd', strtotime($birthday));

    return substr($diff, 0, -4);
}

/* Задача 1
 * Пусть при регистрации мы спрашивали у пользователя
 * логин, пароль, имя, отчество, фамилию, дату рождения.
 * Выведите в профиле пользователя все эти данные, кроме пароля.
 */

/*
 * id user
 */
$id = $_GET['id'];

$query = "SELECT login, name, surname, birthday, country FROM users WHERE id='$id'";
$res = mysqli_query($link,$query);
$users = mysqli_fetch_assoc($res);

foreach ($users as $user) {
    echo $user. ' ';
}
?>