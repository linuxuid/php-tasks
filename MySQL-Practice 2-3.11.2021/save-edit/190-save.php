<?php
include 'connect_db.php';


if (isset($_GET['id'])):
$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

/*
 * query
 */

$query = "UPDATE users SET
    name = '$name', age='$age', salary='$salary'
    WHERE id=$id
    ";

mysqli_query($link,$query) or die(mysqli_error($link));

    echo 'user succesful changed';
else :
    echo 'failed';
endif;
?>