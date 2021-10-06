<?php
/*
 * Спецсимволы внутри квадратных скобок в PHP
 */

/* Задача 1
 * Дана строка: $str = 'aba aea aca aza axa a.a a+a a*a';
 * Напишите регулярку, которая найдет строки 'a.a', 'a+a', 'a*a', не затронув остальных.
 */

$str = 'aba aea aca aza axa a.a a+a a*a';
$res = preg_replace('#a[.*+]a#','!',$str); // aba aea aca aza axa ! ! !

/* Задача 2
 * Дана строка: $str = 'xaz x.z x3z x@z x$z xrz';
 * Напишите регулярку, которая найдет строки по шаблону: буква 'x',
 * затем НЕ точка, НЕ собака, и НЕ доллар, а потом буква 'z'.
 */

$str = 'xaz x.z x3z x@z x$z xrz';
$res = preg_replace('#x[^.@$]z#','',$str); // x.z x@z x$z