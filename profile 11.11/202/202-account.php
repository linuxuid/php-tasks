<?php
include 'connect_db.php';

session_start();
    $id = $_SESSION['id'];
    $query = "SELECT * FROM users 
            WHERE login='$id'";

    $result = mysqli_query($link,$query);
    $user = mysqli_fetch_assoc($result);

if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    $query = "UPDATE users SET 
                 name='$name', 
                 surname='$surname',
                 WHERE id='$id'";
    mysqli_query($link,$query);
}

?>

<form action="" method="POST">
   <p>name : <input name="name" value="<?= $user['name']?>"> </p>
    <p>surname : <input name="surname" value="<?= $user['surname']?>"></p>
    <input type="submit" name="submit">
</form>
