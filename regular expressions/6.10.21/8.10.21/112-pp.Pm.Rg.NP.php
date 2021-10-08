<?php
/*
 * Именованные карманы в регулярках PHP
 */

/* Задача 1
 * Дана строка со временем: $str = '12:59:59';
 * Положите часы, минуты и секунды в отдельные именованные карманы.
 */

$str = '12:59:59';
$reg = '#(?<hrs>\d{2}):(?<minutes>\d{2}):(?<seconds>\d{2})#';

preg_match($reg, $str, $match);
echo "<pre>";
print_r($match);

/* Задача 2
 * Напишите функцию, которая в массиве с результатом
 * удалит все нумерованные карманы, оставив только именованные.
 */

function arrReg() {
    $str = '12:59:59';
    $reg = '#(?<hrs>\d{2}):(?<minutes>\d{2}):(?<seconds>\d{2})#';

    preg_match($reg, $str, $match);

    /*
     * Удаляем числовие ключи с помощью функции is_numeric
     */
    foreach ($match as $key => $val) {
        if (is_numeric($key)) {
            unset($match[$key]);
        }
    }
    return $match;
}
var_dump(arrReg($match));

/*
array(3) {
  ["hrs"]=>
  string(2) "12"
  ["minutes"]=>
  string(2) "59"
  ["seconds"]=>
  string(2) "59"
}
 */