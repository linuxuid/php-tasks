<?php
/*
 * Работа с рекурсией в PHP
 */

/* Задача 1
 * Дан массив
 * С помощью рекурсии выведите элементы массива на экран
 */
function foo($arr) {
    foreach($arr as $el) {
        if (is_array($el))
            foo($el);
            echo $el;
    }
}
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e'
=> 5];
echo '<pre>';
foo($arr);

echo "<br>";

/* Задача 2
 * Нахождение суммы элементов с помощью рекурсии
 */
function func($arr1){
    $sum = 0;
    foreach($arr1 as $a){
        if (is_array($a)){
            $sum += func($a);
        } else {
            $sum += $a;
        }
    }
    return $sum;
}
$arr1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e'
=> 5];
echo func($arr1); // 15