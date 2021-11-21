<?php
include "database.php";
session_start();

if (isset($_REQUEST['sub'])) {

    // checking if form exists
    // checking is login exists
    if (!$_REQUEST['login']) {
        $error = 'Write login';
    }

    // checking if password exists
    if (!$_REQUEST['password']) {
        $error = 'Write password';
    }

    // checking if error exists
    if (!$error) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];

        $query = "SELECT password, id FROM users WHERE login='$login'";
        $result = mysqli_query($link,$query) or die(mysqli_error($link));
        while($row = mysqli_fetch_assoc($result)){
            // checking `id` user
            if ($row['id']) {
                // if exists he compare password with func password_verify()
                if (password_verify($password, $row['password'])){
                    // if return TRUE u auth
                    echo 'Welcome ' . '<strong style="color:red">' . $login . '</strong>';

                    // Authorization id
                    $_SESSION['auth'] = true;
                    header('Location:board.php');
                    exit();
                } else {
                    // if FALSE
                    echo 'password is don\'t compare';
                }
            } else {
                echo 'incorrect login';
            }
        }
    } else {
        // if there are errors return
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
    <title>Document</title>
</head>
<body>
<!-- auth form -->
<h2>Authorization</h2>
<form method="POST">
    <p> <input type="text" name="login"></p>
    <p> <input type="password" name="password"></p>
    <p> <input type="submit" value="auth" name="sub"></p>

</body>
</html>
