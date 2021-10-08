<?php
/*
 * Конец или начало слова в регулярках PHP
 */

/* Задача 1
 * Дана строка: $str = 'aaa xaa aaa xbb aaa';
 * Напишите регулярку, которая найдет строки по шаблону: буква 'x' в начале слова.
 */

$str = 'aaa xaa aaa xbb aaa';
$res = preg_replace('#\bx#','!', $str);
echo $res;