<?php
/*
 * Заполнение массивов через цикл
 */

/* Задача 1
 * Обьявите пустой массив, а затем заполните его элементами от 1 до 10
 */

// Простое заполнение
$num = [];
$num[] = 1;
$num[] = 2;
$num[] = 3;
$num[] = 4;
$num[] = 5;
$num[] = 6;
$num[] = 7;
$num[] = 8;
$num[] = 9;
$num[] = 10;

// Вывод $num
echo "<pre>";
var_dump($num);
echo "</pre>";

echo "<br>";

// функция array_push
$arrayFunc = [];
array_push($arrayFunc, 1,2,3,4,5,6,7,8,9,10);

// Вывод $arrayFunc
echo "<pre>";
print_r($arrayFunc);
echo "</pre>";

echo "<br>" . "<hr>";

/* Задача 2
 * Объявите пустой массив, а затем заполните его 5-ю буквами x.
 */

// Простое заполнение
$array = [];
$array[] = 'x';
$array[] = 'x';
$array[] = 'x';
$array[] = 'x';
$array[] = 'x';

// Вывод $array
echo "<pre>";
var_dump($array);
echo "</pre>";

echo "<br>";

// функцию array_push
$arrFunc = [];
array_push($arrFunc, 'x','x','x','x','x');

// Вывод $arrFunc
echo "<pre>";
print_r($arrFunc);
echo "</pre>";

echo "<br>" . "<hr>";

/* Задача 3
 *  С помощью цикла заполните массив числами от 1 до 100.
 */

$numsFor = []; // заполнить данный массив используя цикл for()

for ($i = 0; $i <= 99; $i++){
    $numsFor[] = $i + 1;
}
// Вывод $numsFor
echo "<pre>";
print_r($numsFor);
echo "</pre>";

echo "<br>";

$numsWhile = []; // заполнить данный массив используя while()
$i = 0;

while ($i <= 98){
    $i++;
    $numsWhile[] = $i + 1;
}

// Вывод $numsWhile
echo "<pre>";
print_r($numsWhile);
echo "</pre>";

echo "<br>" . "<hr>";

/* Задача 4
 * С помощью цикла заполните массив нечетными
 * числами в промежутке от 1 до 99.
 */

/*
 * Через цикл for
 */
$oddNumsFor = [];

for ($i = 0; $i <= 98; $i++) {
    if ($i % 2 != 0) {
        $oddNumsFor[] = $i + 2;
    }
}

/*
 * вывод $oddNums
 */
echo "<pre>";
print_r($oddNumsFor);
echo "</pre>";

/*
 * Через цикл while
 */
$oddNumsWhile = [];
$i = 0;

while($i <= 99) {
    if ($i % 2 != 0) {
        $oddNumsWhile[] = $i + 2;
    }
    $i++;
}

/*
 * Вывод $oddNumsWhile
 */
echo "<pre>";
print_r($oddNumsWhile);
echo "</pre>";
