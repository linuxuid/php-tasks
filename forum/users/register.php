<?php
require_once '../database/db_connect.php';

/*
 * functions
 */

/*
 * isValid string
 */
function isValid($data) {
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);

    return $data;
}

/*
 * isLength
 */
function isLength($str, $min, $max){
    if ($str < $min){
        return "string is very short, should be $min";
    }
    if ($str > $max){
        return "max symbols $max";
    }
    return TRUE;
}

/*
 * if isset submit
 */
if (isset($_REQUEST['sub'])){
    if ($_REQUEST['password'] !== $_REQUEST['confirm']){
        $error = 'Password incorrect';
    }

    // checking if password field not empty
    if (!$_REQUEST['confirm']){
        $error = 'confirm your password';
    } else {
      isValid(isLength($_REQUEST['confirm'], 3, 15));
    }

    // checking password
    if(!$_REQUEST['password']){
        $error = 'write password';
    } else {
        isValid(isLength($_REQUEST['password'], 3, 15));
    }

    // checking email
    if (!$_REQUEST['email']) {
        $error = 'write email!';
    } else {
        $var = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
    }

    // checking login
    if (!$_REQUEST['login']){
        $error = 'write login!';
    } else {
        isValid(isLength($_REQUEST['login'], 5, 10));
    }

    // checking name
    if (!$_REQUEST['name']) {
        $error = 'write your name!';
    } else {
        isValid($_REQUEST['name']);
    }

    // if there are bo errors
    if (!$error) {
        $name = $_REQUEST['name'];
        $login = $_REQUEST['login'];
        $email = $_REQUEST['email'];

        // password hash
        $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

        $query = "SELECT * FROM users WHERE login='$login' AND email='$email'";
        $result = mysqli_query($link,$query) or die($link);
        $user = mysqli_fetch_assoc($result);

        if (empty($user)){
            $query = "INSERT INTO users
                      SET name='$name', login='$login', email='$email', password='$password'";
            mysqli_query($link,$query) or die(mysqli_error($link));
            echo 'register is successful' . "<br>";
            echo 'Congratulations! you\'re register now, you can authorize now <a href="Auth.php">AUTH</a>';
        } else {
            echo 'login or email already is busy';
        }
    } else {
        echo $error;
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css" type="text/css" />
    <title>Register form</title>
</head>
<body>
<!-- Register form -->

    <form action="" method="POST">
       <div class="container">
        <h1 class="text-center">registration form</h1>
           <label for="name">Name:</label>
               <input type="text" name="name" placeholder="name">
            <label for="login">Login:</label>
                <input type="text" name="login" placeholder="login">
                <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="email">
                    <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="password">
                        <label for="confirm">Confirm:</label>
                            <input type="password" name="confirm" placeholder="confirm password">
        <input type="submit" class="registerbtn" value="send" name="sub">
        </div>
    </form>
</body>
</html>
