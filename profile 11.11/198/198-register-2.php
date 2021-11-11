<?php
include "connect_db.php";

/* Задача 2
 * Модифицируйте ваш код так, чтобы кроме логина и пароля пользователю нужно было
 * ввести еще и дату своего рождения и email. Сохраните эти данные в базу данных.
 */

if (!empty($_POST['login']) and !empty($_POST['password'])):
    $login = $_POST['login'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];

    $query = "INSERT INTO users SET 
            login='$login', password='$password', 
            birthday='$birthday', email='$email'";
    mysqli_query($link,$query);
endif;

?>

<form action="" method="POST">
    <h2>Auth</h2>

    <p> login : <input name="login"></p>
    <p> password : <input name="password" type="password"></p>
    <p> Birthday : <input name="birthday" type="date"></p>
    <p> E-mail : <input name="email" type="email"></p>
    <p> submit <input type="submit"> <p>
</form>
