<?php
include 'database.php';

/*
 * Function for check unwanted characters
 */
function isValid($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}

/*
 * Function for check length characters
 */
function isLength($str, $min, $max){
    if ($str < $min) {
        return 'is very short';
    }
    if ($str > $max) {
        return 'is very long';
    }
    return TRUE;
}


if (isset($_REQUEST['sub'])) {
    if ($_REQUEST['password'] !== $_REQUEST['confirm']) {
        $error = 'Password incorrect';
    }

    // Checking if it exists confirm password
    if (!$_REQUEST['confirm']) {
        $error = 'Write confirm pass';
    }

    // Checking if it exists password
    if (!$_REQUEST['password']) {
        $error = 'Write password';
    } else {
        isLength($_REQUEST['password'], 3, 15);
    }

    // Checking if it exists email
    if (!$_REQUEST['email']) {
        $error = 'Write email';
    } else {
        $var = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
    }

    // Checking if it exists login
    if (!$_REQUEST['login']) {
        $error = 'Write login';
    } else {
        isLength($_REQUEST['login'], 5, 12);
    }

    // if there are no errors
    if (!$error) {
        $login = isValid($_REQUEST['login']);
        $email = isValid($_REQUEST['email']);
        // hash password
        $password = isValid(password_hash($_REQUEST['password'], PASSWORD_DEFAULT));

        $query = "SELECT * FROM users WHERE login='$login' AND email='$email'";
        $result = mysqli_query($link,$query) or die($link);
        $user = mysqli_fetch_assoc($result);

        if (empty($user)){
            $query = "INSERT INTO users 
                      SET login='$login', email='$email', 
                      password='$password'";
            mysqli_query($link,$query) or die(mysqli_error($link));
            echo 'register is successful';
            header('Location:auth.php');
        } else {
            echo 'login is busy or email is busy';
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
    <title>Document</title>
</head>
<body>
<!-- register form -->
<form method="POST">
    <p> login : <input type="text" name="login"></p>
    <p> Email : <input type="email" name="email"></p>
    <p> Password : <input type="password" name="password"></p>
    <p> Password Confirm <input type="password" name="confirm"></p>
    <p><input type="submit" value="register" name="sub"></p>
</form>

</body>
</html>
