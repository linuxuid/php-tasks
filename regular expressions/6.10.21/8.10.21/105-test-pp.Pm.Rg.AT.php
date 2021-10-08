<?php
/*
 * Автоматическое тестирование регулярок в PHP
 */

/* Задача 1
 * Пусть вам нужно проверить, что в строке есть дробное число.
 * Используя предложенный скрипт, проверьте вашу регулярку на различных строках.
 */
$reg = '#\d+[\.,]?d*#';

$arr[] = '0,23423';
$arr[] = 'float';
$arr[] = 'string';
$arr[] = 'integer';
$arr[] = 'boolean';

foreach ($arr as $item) {
    echo $item . ' ' .  preg_match($reg,$item) . "<br>";
}

/*
 * output
 */

// 0,23423 1
// float 0
// string 0
// integer 0
// boolean 0