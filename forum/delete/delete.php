<?php
include "../database/db_connect.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM users WHERE status='admin'";
    $res = mysqli_query($link,$query) or die(mysqli_error($link));
    $admin = mysqli_fetch_assoc($res);

    if ($admin) {
        $query = "DELETE FROM sections WHERE id='$id'";
        mysqli_query($link,$query) or die(mysqli_error($link));
        echo 'record is deleted' . "<br>";
        echo 'Authorization page <a href="../users/Auth.php">Auth</a>' . "<br>";
        echo 'Forum page <a href="../send_page/board.php">Forum</a>';


    } else {
        echo 'you are not admin';
    }
}


?>