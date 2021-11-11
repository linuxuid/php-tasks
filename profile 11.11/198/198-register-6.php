<?php
include "connect_db.php";
session_start();

/* Задача 6
 * Модифицируйте ваш код так, чтобы при отправке формы пароль сравнивался с
 * его подтверждением. Если они совпадают -
 * то продолжаем регистрацию, а если не совпадают - то выводим сообщение об этом.
 */

if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) :
    if ($_POST['password'] == $_POST['confirm']){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
    } else {
        echo "wrong password";
    }
    /*
     * Запрос в БД для сравнения существуещего логина
     */
    $query = "SELECT * FROM users WHERE login='$login'";
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));

    if (empty($user)) {
        $query = "INSERT INTO users SET 
            login='$login', password='$password',   
            birthday='$birthday', email='$email'";
        /*
         * Выполняем запрос
         */
        mysqli_query($link, $query);

        /*
        * Автоматическая авторизация после регистрации
        */
        $_SESSION['auth'] = true; // памятка об авторизации
    } else {
        echo 'this login is busy';
    }

    /*
     * id
     */
    $id = mysqli_insert_id($link);
    $_SESSION['id'] = $id; // id в сессию
endif;
?>

<form action="" method="POST">
    <h2>Auth</h2>

    <p> login : <input name="login"></p>
    <p> password : <input name="password" type="password"></p>
    <p> password confirm : <input name="confirm" type="password"></p>
    <p> Birthday : <input name="birthday" type="date"></p>
    <p> E-mail : <input name="email" type="email"></p>
    <p> submit <input type="submit"> <p>
</form>

