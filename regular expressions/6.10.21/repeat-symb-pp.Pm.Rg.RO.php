<?php
/*
 * Операторы повторения символов в регулярках
 */

/* Задача 1
 * Дана строка: $str = 'aa aba abba abbba abca abea';
 * Напишите регулярку, которая найдет строки
 * по шаблону: буква 'a', буква 'b' один или более раз, буква 'a'.
 */

$str = 'aa aba abba abbba abca abea';
$new1 = preg_replace('#ab+a#', '', $str);


/* Задача 2
 * Дана строка: $str = 'aa aba abba abbba abca abea';
 * Напишите регулярку, которая найдет строки
 * по шаблону: буква 'a', буква 'b' ноль или более раз, буква 'a'.
 */

$str = 'aa aba abba abbba abca abea';
$new2 = preg_replace('#ab*a#', '', $str);

/* Задача 3
 * Дана строка: $str = 'aa aba abba abbba abca abea';
 * Напишите регулярку, которая найдет строки
 * по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'.
 */

$str = 'aa aba abba abbba abca abea';
$new3 = preg_replace('#ab?a#', '', $str);

/* Задача 4
 * Дана строка: $str = 'aa aba abba abbba abca abea';
 * Напишите регулярку, которая найдет
 * строки 'aa', 'aba', 'abba', 'abbba', не захватив 'abca' и 'abea'.
 */

$str = 'aa aba abba abbba abca abea';
$new4 = preg_replace('#ab*a#', '', $str);
echo $new4;