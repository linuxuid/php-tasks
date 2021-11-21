<?php
session_start();
?>

<?php
    if (!empty($_SESSION['auth'])){
        if (isset($_REQUEST['sub'])){
            echo 'logout';
            header('Location:auth.php');
            exit();
        }
    } else {
        echo 'you are not logging in already';
    }
?>

<form method="POST">
    <input type="submit" name="sub" value="logout">
</form>
