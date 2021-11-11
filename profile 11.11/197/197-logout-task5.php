<?php

/* Задача 5
 * Реализуйте страницу logout.php, зайдя на которую,
 * пользователь перестанет быть авторизованным.
 */

session_start();
if (!empty($_SESSION['auth'])):
    $_SESSION['auth'] = null;
else:
    echo "Вы не авторизованы";
    endif;
?>