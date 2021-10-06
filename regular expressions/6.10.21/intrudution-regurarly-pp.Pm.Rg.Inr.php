<?php
/*
 * Введение в регулярные выражения в PHP
 */

/* Задача 1
 * Дана строка: $str = 'ahb acb aeb aeeb adcb axeb';
 * Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb'
 * по шаблону: буква 'a', любой символ, буква 'b'.
 */

$str = 'ahb acb aeb aeeb adcb axeb';
$new = preg_replace('#a.b#', '', $str); // aeeb adcb axeb

/* Задача 2
 * Дана строка: $str = 'ahb acb aeb aeeb adcb axeb';
 * Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону:
 * буква 'a', два любых символа, буква 'b'.
 */

$str = 'ahb acb aeb aeeb adcb axeb';
$newStr = preg_replace('#a..b#', '', $str); // ahb acb aeb
echo $newStr;