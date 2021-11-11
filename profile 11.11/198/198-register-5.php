<?php
include 'connect_db.php';
session_start();

/* Задача 5
 * Запишите при регистрации в сессию еще и id пользователя.
 */


if (!empty($_POST['login']) and !empty($_POST['password'])):
    $login = $_POST['login'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];

    $query = "INSERT INTO users SET 
            login='$login', password='$password', 
            birthday='$birthday', email='$email'";
    $resQuery = mysqli_query($link, $query);

    /*
     * Автоматическая авторизация после регистрации
     */
    $_SESSION['auth'] = true; // памятка об авторизации

    /*
     * id
     */
    $id = mysqli_insert_id($link);
    $_SESSION['id'] = $id; // id в сессию
endif;

/*
 * Реализация автоматической авторизации после регистрации
 */
if ($_SESSION['auth']) {
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