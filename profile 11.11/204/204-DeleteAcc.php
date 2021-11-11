<?php
include "connect_db.php";
session_start();

if (!empty($_POST['password'])){

    $id = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id='$id'";

    $res = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($res);

    if ($_POST['password']) {
        $query = "DELETE FROM users WHERE id='$id'";
        mysqli_query($link,$query);
        echo 'Акаунт удалён';
    } else {
        echo 'Неверно';
    }
}

?>
<form action="" method="POST">
    <p> type pass : <input type="password" name="password"> </p>
    <input type="submit">
</form>
