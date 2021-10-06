<?php
/*
 * Фигурные скобки в регулярных выражения PHP
 */

/* Задача 1
 * Дана строка: $str = 'aa aba abba abbba abbbba abbbbba';
 * Напишите регулярку, которая найдет строки 'abba', 'abbba', 'abbbba' и только их.
 */

$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace('#ab{2,}a#','',$str); // aa aba

/* Задача 2
 * Дана строка: $str = 'aa aba abba abbba abbbba abbbbba';
 * Напишите регулярку, которая найдет строки вида 'aba',
 * в которых 'b' встречается менее трех раз (включительно).
 */

$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace('#ab{1,2}a#','',$str); // aa abbba abbbba abbbbba

/* Задача 3
 * Дана строка: $str = 'aa aba abba abbba abbbba abbbbba';
 * Напишите регулярку, которая найдет строки вида 'aba', в которых 'b'
 * встречается более четырех раз (включительно).
 */

$str = 'aa aba abba abbba abbbba abbbbba';
$res = preg_replace('#ab{4,}a#','',$str); // aa aba abba abbba