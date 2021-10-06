<?php
/*
 * Особенности кириллицы в регулярках PHP
 */

/* Задача 1
 * Дана строка: $str = 'wйw wяw wёw wqw';
 * Напишите регулярку, которая найдет строки по шаблону:
 * по краям стоят буквы 'w', а между ними - буква кириллицы.
 */

$str = 'wйw wяw wёw wqw';
$res = preg_replace('#w[а-яё]w#u','',$str); // wqw

/* Задача 2
 *  Дана строка: $str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
 * Напишите регулярку, которая найдет все слова по шаблону:
 * любая кириллическая буква любое количество раз.
 */

$str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
$res = preg_replace('#[а-яёА-яЁ]*#u','',$str); // пусто