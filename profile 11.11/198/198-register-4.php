<?php
include 'connect_db.php';
session_start();

/* Задача 4
 * Модифицируйте ваш код так, чтобы после регистрации
 * пользователь автоматически становился авторизованным.
 */


if (!empty($_POST['login']) and !empty($_POST['password'])):
    $login = $_POST['login'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];

    $query = "INSERT INTO users SET 
            login='$login', password='$password', 
            birthday='$birthday', email='$email'";
    $resQuery = mysqli_query($link,$query);

        $_SESSION['auth'] = true;
endif;

/*
 * Реализация автоматической авторизации после регистрации
 */
if ($_SESSION['auth']){
    echo 'Welcome ' . $_SESSION['login'];
} else {
    echo
    '<form action="" method="POST">
             <h2>Auth</h2>

             <p> login : <input name="login"></p>
             <p> password : <input name="password" type="password"></p>
             <p> Birthday : <input name="birthday" type="date"></p>
             <p> E-mail : <input name="email" type="email"></p>
             <p> submit <input type="submit"> <p>
             </form>';
}
?>

