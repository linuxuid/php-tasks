<?php
/*
 * Рекурсия и многомерные структуры в PHP
 * hash : pp.Pm.UF.RMA
 */

/* Задача 1
 * Дан многомерный массив произвольного уровня вложенности, например, такой:
 * $arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
 * С помощью рекурсии выведите все примитивные элементы этого массива на экран.
 */
function foo($arr) {
    foreach ($arr as $item) {
        if (is_array($item)) {
            foo($item);
        } else {
            echo $item;
        }
    }
}
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
foo($arr);

echo "<br>";

/* Задача 2
 * Дан многомерный массив произвольного уровня вложенности, например, такой:
 * $arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
 * С помощью рекурсии найдите сумму элементов этого массива.
 */
function func($arr) {
    $sum = 0;
    foreach ($arr as $item) {
        if (is_array($item)) {
            $sum += func($item);
        } else {
            $sum += $item;
        }
    }
    return $sum;
}
$arr2 = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]; // 55
echo func($arr2);

echo '<br>';
/* Задача 3
 * Дан многомерный массив произвольного уровня вложенности,
 * содержащий внутри себя строки, например, такой:
 * $arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
 * С помощью рекурсии слейте элементы этого массива в одну строку: 'abcdefgjk'
 */
function multi_array($elem, array $arr) {
    $newArr = [];
    foreach ($arr as $val) {
        if (is_array($val)) {
            $newArr[] = multi_array($elem, $val);
        } else {
            echo $val;
        }
    }
    return implode($elem, $newArr);
}
$arr3 =['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
echo multi_array('', $arr3);

echo "<br>";
/* Задача 4
 * Дан многомерный массив произвольного уровня вложенности, например, такой:
 * $arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
 * Возведите все элементы-числа этого массива в квадрат.
 */

function numbersSquared($arr) {
    $sum = 1;
    foreach ($arr as $it) {
        if (is_array($it)) {
            $sum = pow(numbersSquared($it), 2);
        } else {
            $sum = pow($it,2);
        }
    }
    return $sum;
}
$arr4 = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
echo numbersSquared($arr4);