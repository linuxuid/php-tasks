<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'forum';

$link = mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno()){
    echo "Failed to connect" . mysqli_connect_error();
    exit();
}

?>

