<?php
session_start();

include "connect_db.php";

if (!empty($_POST['old_password'] and !empty($_POST['new_password']))) {
$oldPass = $_POST['old_password'];
$newPass = $_POST['new_password'];

if ($_POST['new_password'] != $_POST['new_password_confirm']){
    echo 'Пароль вбит неккоректно';
}

$id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE id='$id'";

$result = mysqli_query($link,$query);
$user = mysqli_fetch_assoc($result);

$hash = $user['password'];
$oldPassword = $_POST['old_password'];
$newPassword = $_POST['new_password'];

if (password_verify($oldPassword, $hash)){
    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $query = "UPDATE users SET password='$newPassword' WHERE id='$id'";
    mysqli_query($link,$query);
} else {
    echo 'Пароль введен неправильно!';
}

}

?>
<form action="" method="POST">
    <p> old pass : <input type="password" name="old_password"> </p>
    <p> new pass : <input type="password" name="new_password"> </p>
    <p> new pass : <input type="password" name="new_password_confirm"> </p>
    <input type="submit" name="submit">
</form>
