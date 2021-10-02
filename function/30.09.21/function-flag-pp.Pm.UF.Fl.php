<?php
/*
 * Флаги в функциях PHP
 * hash pp.Pm.UF.Fl
 */

/* Задача 1
 * Сделайте функцию, которая параметром будет
 * принимать массив с числами, и проверять,
 * что все элементы в этом массиве являются четными числами.
 */
function isEven(array $arr) {
    foreach ($arr as $item) {
        if ($item % 2 === 0) {
            return true;
        }
    }
    return false;
}
var_dump(isEven([2,4,6,8,10,12])); // true
var_dump(isEven([3,5])); // false

echo "<br>";
/* Задача 2
 * Сделайте функцию, которая параметром будет принимать
 * число и проверять, что все цифры это числа являются нечетными.
 */

function isOdd($num) {
    for($i=1 ; $i < $num ; $i++) {
        if ($num % $i !== 0) {
            return true;
        }
    }
    return false;
}
var_dump(isOdd(3)); // true
var_dump(isOdd(2)); // false

echo "<br>";
/* Задача 3
 * Сделайте функцию, которая параметром будет принимать
 * массив и проверять, есть ли в этом массиве два одинаковых элемента подряд.
 */

function isArr(array $arr) {
    $length = count($arr);
    for ($i = 1; $i < $length; ++$i) {
        if ($arr[$i] === $arr[$i-1]) {
            return true;
        }
    }
    return false;
}
var_dump(isArr([3,5,6]));