<?php

/* Задача 4
 * Сделайте так, чтобы при заходе на любую страницу сайта,
 * авторизованный пользователь
 * видел свой логин, а не
 * авторизованный - ссылку на страницу авторизации.
 */

?>


<?php session_start();  ?>
<?php if (!empty($_SESSION['auth'])):
    echo 'username ' .  $_SESSION['login']; ?>
<?php else: ?>
    <a href="197-login-task1.php">press and login</a>
<?php endif; ?>
