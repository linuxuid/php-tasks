<?php
/*
 * Примеры на создание функций в PHP
 */

/* Задача 1
 * Напишите функцию, которая будет находить сумму квадратных корней элементов массива
 */

function square($arr) {
    $sum = 0;
    foreach ($arr as $item) {
        $sum += square($item);
    }
    return $sum;
}


/* Задача 2
 * Реализуйте функцию getDivisors, которая параметром будет принимать число
 * и возвращать массив его делителей, то есть целых чисел, на которое делится наше число.
 */

function getDivisors($num) {
    $arr = [];
    for ($i=1; $i<= $num; $i++) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
echo "<pre>";
print_r(getDivisors(36));

/* Задача 3
 * Сделайте функцию delElem, которая параметрами будет
 * принимать значение и массив и удалять из массива все элементы с таким значением.
 */

function delElem($arr, $elem) {
    foreach($arr as $item) {
        if ($item == $elem) {
            array_splice($item, 1);
        }
    }
    return $item;
}
var_dump(delElem([1,2,3,4,5,6,9,2,3,2,2], 2));
