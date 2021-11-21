<?php
include "database.php";

if (isset($_POST['id'])){
    $id = $_POST['id'];

    $query = "SELECT * FROM users WHERE status='admin'";
    $res = mysqli_query($link,$query) or die(mysqli_error($link));
    $user = mysqli_fetch_assoc($res);


    if ($user){
        $query = "DELETE FROM board WHERE user_id='$id'";
        mysqli_query($link,$query) or die(mysqli_error($link));
        echo "record is deleted";
    } else {
        echo 'you are not admin';
    }
}


?>

