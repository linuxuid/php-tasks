<?php
session_start();

if (isset($_SESSION['flash'])):
    echo 'Welcome, '. $_SESSION['flash'];
    unset($_SESSION['flash']);
    endif;


?>