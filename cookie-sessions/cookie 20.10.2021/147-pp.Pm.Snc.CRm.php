<?php
/*
 * Удаление кук в PHP
 */

/* Задача 1
 * Удалите какую-нибудь куку.
 * Обновите страницу и убедитесь, что она удалилась.
 */
setcookie('name','test',time() + 3600);
var_dump($_COOKIE['name']) . "<br>";

/*
 * delete
 */
if (isset($_COOKIE['name'])):
    setcookie('name', '', time());
    var_dump($_COOKIE['name']);
endif;

/* Задача 2
 * Удалите какую-нибудь куку с помощью хитрого приема.
 * Убедитесь, что она будет удалена сразу.
 */

if (isset($_COOKIE['name'])):
    setcookie('name','',time());
    unset($_COOKIE['name']);
endif;

var_dump($_COOKIE['name']); // Сразу удалена и не создается