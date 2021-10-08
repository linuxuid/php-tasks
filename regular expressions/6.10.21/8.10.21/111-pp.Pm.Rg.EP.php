<?php
/*
 * Карманы в регулярном выражении в PHP
 */

/* Задача 1
 * Дана строка: $str = 'aaa bbb ccc xyz';
 * Найдите все подстроки, в которых есть три одинаковые буквы подряд.
 */

$str = 'aaa bbb ccc xyz';
$res = preg_replace('#([a-z]+)\1\1#','!',$str); // ! ! ! xyz

/* Задача 2
 * Дана строка: $str = 'a aa aaa abab bbbb';
 * Найдите все подстроки, в которых есть две и более одинаковые буквы подряд.
 */

$str = 'a aa aaa abab bbbb';
$res = preg_replace('#([a-z]){1,}\1#','!',$str); // a ! ! abab !

/* Задача 3
 * Дана строка: $str = 'aaa aaa bbb bbb ccc ddd';
 * Найдите все подстроки, в которых есть два одинаковых слова подряд.
 */

$str = 'aaa aaa bbb bbb ccc ddd';
$res = preg_replace('#([a-z])\s([a-z])\1#','',$str); // aaa bbb ccc ddd