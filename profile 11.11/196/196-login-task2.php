<?php
include "connect_db.php";
session_start();

/* Задача 2
 * Модифицируйте код так, чтобы в случае успешной авторизации форма
 * для ввода пароля и логина не показывалась на экране.
 */

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users 
            WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)){
        $hash = $user['password'];
    if (password_verify($_POST['password'], $hash)) {
        echo 'done';
        }   else {
        echo 'Failed';
        }
    } else {
        echo 'Пользователя с таким логином не существует';
    }
}

?>


<style>
    form {
        max-width: 400px;
        padding: 15px;
        margin: 0 auto;
    }

</style>

<div class="container">
ghbdt
    <?php

    if (empty($_SESSION['password']) OR empty($_SESSION['login'])):
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
        echo '
    <form action="196-login-task2.php" method="POST">
        <h2>Авторизация</h2>

        <input name="login" placeholder="login" >
        <input name="password" type="password" placeholder="password" >
        <input type="submit">
        </form>';
    else : ?>
        Welcome, <?=$_SESSION['login']?>
   <?php endif; ?>
</div>
