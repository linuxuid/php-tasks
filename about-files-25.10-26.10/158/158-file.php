<?php

/*
 * Делители числа
 */
function getDividers($num){
    $arr = [];
    for ($i=1; $i<=$num; $i++) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

/*
 * Возведение в квадрат
 */
function square($num) {
    $square = pow($num,2);
    return $square;
}

/*
 * Сумма элементов массива
 */
function sum(array $arr)
{
    $sum = 0;
    foreach ($arr as $item) {
        $sum += $item;
    }
    return $sum;
}

?>