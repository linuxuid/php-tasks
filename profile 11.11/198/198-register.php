<?php
include 'connect_db.php';

/*
 * Регистрация на PHP
 */

/* Задача 1
 * Реализуйте описанную выше регистрацию. После этого зарегистрируйте
 * нового пользователя и авторизуйтесь под ним.
 * Убедитесь, что все работает, как надо.
 */

if (!empty($_POST['login']) and !empty($_POST['password'])):
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "INSERT INTO users SET login='$login', password='$password'";
    mysqli_query($link,$query);
endif;

?>

<form action="" method="POST">
    <h2>Auth</h2>

    <p> login : <input name="login"></p>
    <p> password : <input name="password" type="password"></p>
    <p> submit <input type="submit"> <p>
</form>


