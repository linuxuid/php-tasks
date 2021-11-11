<?php

/*
 * Авторизация через сессию на PHP
 */

/* Задача 1
 * Пусть на нашем сайте, кроме страницы login.php, есть еще и
 * страницы 1.php, 2.php и 3.php. Сделайте так,
 * чтобы к этим страницам мог получить
 * доступ только авторизованный пользователь.
 */

/* Задача 2
 * Вручную поменяйте какому-нибудь пользователю его статус
 * на 'admin'. Авторизуйтесь под этим пользователем.
 */

include 'connect_db.php';

session_start();

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $AccessGroup = $_POST['status'];

    $query = "SELECT * FROM users
    WHERE status ='$AccessGroup',login='$login' AND password='$password'";
    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($result);

    $hash = $user['password'];
    if (!empty($user) and password_verify($_POST['password'], $hash)) {
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $user['id'];
             echo 'Auth';
    } else {
        echo 'Wrong login and password';
    }
}

if ($AccessGroup == 'admin') {
    echo 'Welcome to admin Group';
    $_SESSION['admin'] = true;
} else {
    $_SESSION['user'] = true;
    echo 'Welcome to user group';
}

?>
<form action="" method="POST">
    <h2>Авторизация</h2>

    <input name="login" placeholder="login" >
    <input name="password" type="password" placeholder="password" >
    <select name="status">
        <option selected>Выбрать группу доступа</option>
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select>
    <input type="submit">
</form>

