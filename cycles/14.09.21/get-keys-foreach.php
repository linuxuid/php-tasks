<?php

/*
 * Получение ключей в цикле reach в PHP
 */

/* Задача 1
 * Дан массив : $arr = ['green' => 'зеленый', 'red' =>
 *		'красный','blue' => 'голубой'];
 */
$arr = [
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой'
];
foreach($arr as $key => $value) {
    echo $key . " - " . $value . "<br>";
}

echo "<br>";

/* Задача 2
 * Дан массив : $arr = ['user1' => 30, 'user2' => 32, 'user3'
 *		=> 33];
 */
$arr2 = [
    'user1' => 30,
    'user2' => 32,
    'user3' => 33
];
foreach ($arr2 as $item => $value) {
    echo $item . ' возраст ' . $value . ' лет ' ."<br>";
}

echo "<br>";

/*
 * Перебор массив и if в PHP
 */

/* Задача 1
 * Дан массив : $arr = [1, 2, 3, 4, 5];
 * 
 * С помощью цикла foreach и оператора if
 * выведите в консоль нечетные элементы массива.
 */
$arr = [1, 2, 3, 4, 5];

foreach ($arr as $item) {
    if ($item % 2 != 0){
        echo $item . ' ';
    }
}

echo "<br>";

/* Задача 2
 * Дан массив : $arr2 = [2, 5, 9, 15, 1, 4];
 * 
 * С помощью цикла foreach и оператора if выведите в консоль 
 * те элементы массива, которые больше 3-х, но меньше 10. 
 */
$arr2 = [2, 5, 9, 15, 1, 4];

foreach ($arr2 as $item) {
    if ($item > 3 && $item < 10) {
        echo $item . ' ';
    }
}

echo "<br>";

/* Задача 3 
 * Дан массив с числами. Числа могут быть 
 * положительными и отрицательными. 
 * Найдите сумму положительных элементов массива. 
 */

$sum = [2, -4, -6, 8, 25, 13];
$val = [];

foreach ($sum as $item) {
    if ($item > 0) {
        $val[] = $item;
    }
}

echo "<pre>";
var_dump($val);
echo "</pre>";

/* Задача 4
 * Дан массив : $arr = [10, 20, 30, 50, 235, 3000];
 *
 * Выведите на экран только те числа из массива,
 * которые начинаются на цифру 1, 2 или 5.
 */

$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $item){
    if (in_array(substr($item, 0, -1), [1,2,5])) {
        echo $item . ' '; // 10 20 50
    }
}

echo "<br>";

/*
 * Второе решение Задачи 4
 */
$nums = [10, 20, 30, 50, 235, 3000];
foreach($nums as $item) {
    if ($item === $nums[0] or $item === $nums[1] or $item === $nums[3]) {
        echo $item . ' '; // 10 20 50
    }
}

echo "<br>";

/* Задача 5
 * Составьте массив дней недели. С помощью цикла foreach
 * выведите все дни недели,
 * а выходные дни выведите жирным.
 */

$dayOfWeek = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];

foreach ($dayOfWeek as $key => $item) {
    if ($key == 5 || $key == 6) {
        echo "<strong>" . $item . "</strong>" . "<br>";
    } else {
        echo $item , '<br>';
    }
}

/* Задача 6
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * а текущий день выведите курсивом.
 * Номер текущего дня должен храниться в переменной $day.
 */

$dayOfWeek_2 = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];
$day = 1;
foreach ($dayOfWeek_2 as $key => $value){
   if ($key == $day) { // Если ключ равен 2 то вывести
        echo "<i>" . $value . "</i>" . "<br>";
   } else {
        echo $value . "<br>";
   }
}