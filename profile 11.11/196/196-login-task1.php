<?php
include 'connect_db.php';
session_start();

/* Задача 1
 * Реализуйте описанную выше авторизацию. Сделайте так,
 * чтобы, если пользователь прошел авторизацию - выводилось
 * сообщение об этом, а если не прошел - то сообщение о том,
 * что введенный логин или пароль вбиты не правильно.
 */

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "SELECT * FROM users 
            WHERE login='$login',password='$password'";

    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)){
        $hash = $user['password'];
        if (password_verify($_POST['password'], $hash)){
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $user['id'];
            echo 'auth';
        }
    } else {
        echo 'failed';
    }
} else {
    echo 'users doesn\'t exists';
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
    <form action="" method="POST">
        <h2>Авторизация</h2>
        <input name="login" placeholder="login">
        <input name="password" type="password" placeholder="password">
        <input type="submit">
    </form>
</div>
