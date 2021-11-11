<?php

/* Задача 3
 * Модифицируйте ваш код так, чтобы при успешной
 * авторизации в сессию записывался также логин пользователя.
 */

include "connect_db.php";

session_start();

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
    WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($result);

    /*
     * В случае успешной авторизации в $_SESSION['login'] записывается login
     */
    if (!empty($user)) {
        $_SESSION['auth'] = true;
        $_SESSION['login'] = $_POST['login'];
        echo 'Hello' . $_SESSION['login'];
    } else {
        echo 'Wrong login and password';
    }
}

?>
<form action="" method="POST">
    <h2>Авторизация</h2>

    <input name="login" placeholder="login" >
    <input name="password" type="password" placeholder="password" >
    <input type="submit">
</form>