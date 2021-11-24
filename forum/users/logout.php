<?php
session_start();
if (isset($_SESSION['auth'])){
    $_SESSION['auth'] = null;
    $_SESSION['logout'] = true;
    // Directly redirect to the page Auth.php
    header('Location:Auth.php');
} else {
    echo 'You are not log';
}

?>