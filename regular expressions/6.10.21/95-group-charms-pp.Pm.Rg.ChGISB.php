<?php
/*
 * Группы символов внутри квадратных скобок PHP
 */

/* Задача 1
 * Напишите регулярку, которая найдет строки по шаблону: цифра или точка от 1 и более раз.
 */

$str = 'xaz x.z x3z x@z x$z xrz';
$res = preg_replace('#[\d.]+#','',$str); // xaz xz xz x@z x$z xrz

/* Задача 2
 * Напишите регулярку, которая найдет строки по шаблону: не цифра и не буква от 'a' до 'g' от 3 до 7 раз.
 */

$str = 'xaz x.z x3z x@z x$z xrz';
$res = preg_replace('#[^\da-g]{1,7}#','',$str); // a3