<?php
/*
 * Введение в сессии в PHP
 */

/* Задача 1
 * Сделайте два файла. При запуске первого файла запишите в сессию два числа,
 * а при запуске второго файла - выведите на экран сумму этих чисел.
 */
if (isset($_POST['submit'])):
    session_start();
    $_SESSION['first'] = 12; // write in session
    $_SESSION['two'] = 24; // write in session

    endif;

    ?>

<form action="139-test2.php" method="POST">
    <input type="submit" name="submit">
</form>

