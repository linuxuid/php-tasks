<?php session_start();
if(!empty($_SESSION['auth'])):
    echo "Авторизован";
else :
    echo "Авторизуйтесь";
endif; ?>
