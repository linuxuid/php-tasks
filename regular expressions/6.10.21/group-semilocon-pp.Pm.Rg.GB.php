<?php
/*
 * Группирующие скобки в регулярках PHP
 */

/* Задача 1
 * Дана строка:  $str = 'ab abab abab abababab abea';
 * Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.
 */

$str = 'ab abab abab abababab abea';
$res = preg_replace('#(ab)+#', '', $str);
echo $res; // ea