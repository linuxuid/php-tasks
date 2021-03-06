<?php
/*
 * Практика на циклы
 */

/* Задача 1
 * Выведите с помощью цикла столбец чисел от 1 до 100.
 */

/*
 * Через for
 */
for ($i=0; $i<=100;$i++) {
    echo $i;
}

echo "<br>";

/*
 * Через while
 */
$i = 0;
while ($i<=99) {
    $i++;
    echo $i;
}

echo "<br>" . "<hr>";

/* Задача 2
 * Выведите с помощью цикла столбец чисел от 100 до 1.
 */

/*
 * Через for
 */
for ($i=100; $i>=0; $i--) {
    echo $i;
}

echo "<br>";
/*
 * Через while
 */
$i = 101;
while ($i>=0) {
    $i--;
    echo $i;
}

echo "<br>" . "<hr>";

/* Задача 3
 * Выведите с помощью цикла столбец четных чисел от 1 до 100.
 */

/*
 * Через for
 */
for ($i=0; $i<=100; $i+=2) {
    echo $i;
}

echo "<br>";
/*
 * Через while
 */
$i = 0;
while ($i<=98) {
    $i+=2;
    echo $i;
}

echo "<br>" . "<hr>";

/* Задача 4
 * Заполните массив 10-ю иксами с помощью цикла.
 */

/*
 * Через for
 */
$arrFor = [];
for ($i=0; $i<=10; $i++) {
    $arr[] = 'x';
}

/*
 * Вывод $arrFor
 */
echo "<pre>";
print_r($arr);
echo "</pre>";

/*
 * Через while
 */
$arrWhile = [];
$i = 0;

while ($i <= 10) {
    $i++;
    $arrWhile[] = 'x';
}

/*
 * Вывод $arrWhile
 */
echo "<pre>";
print_r($arrWhile);
echo "</pre>";


echo "<br>" . "<hr>";

/* Задача 5
 * Заполните массив числами от 1 до 10 с помощью цикла.
 */

/*
 * Через for
 */
$numFor = [];
for ($i=1; $i<=10; $i++) {
    echo $numFor[] = $i;
}

echo "<br>";

/*
 * Через while
 */
$numWhile = [];
$i = 0;

while ($i<=9) {
    $i++;
    echo $numWhile[] = $i;
}

echo "<br>" . "<hr>";

/* Задача 6
 * Дан массив с числами. С помощью цикла выведите только те элементы массива,
 * которые больше нуля и меньше 10-ти.
 */

/*
 * Через for
 */
$numsFor =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];

for ($i = 0; $i < 10; $i++ ){
    echo $numsFor[$i];
}

echo "<br>";

/*
 * Через while
 */
$numsWhile = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
$i = 0;

while ($i < 10) {
    $i++;
    echo $numWhile[$i];
}

echo "<br>" . "<hr>";

/* Задача 7
 * Дан массив с числами. С помощью цикла проверьте,
 * что в нем есть элемент со значением 5.
 */
$numFor = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
$flag = false; // Нет изначально 5 в массиве

foreach ($numFor as $key=>$item) {
    if ($key === 4) {
        $flag = true;
    }
}

/*
 * Выполнение условия $flag
 */
if ($flag === true) {
    echo 'Число 5 есть в массиве';
} else {
    echo 'Число 5 в массиве отсутсвует';
}

echo "<br>" . "<hr>";

/* Задача 8
 * Дан массив с числами. С помощью цикла найдите
 * сумму элементов этого массива.
 */
$numbFor = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];

foreach ($numbFor as $item) {
    $item += $item;
    echo $item . ' ';
}
echo "<br>";

/*
 * array_sum()
 */
$numbFor = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
$sum = array_sum($numbFor);
echo $sum;

echo "<br>";

/*
 * Накопление результата в цикле
 */
$numbForeach = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
$sum = 0;

foreach ($numbForeach as $val) {
    $sum += $val;
}
echo $sum;

echo "<br>";

/*
 * Через цикл for
 */
$numbFor = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];
$sum = 0;
$length = count($numbFor);

for ($i = 0; $i<$length; $i++) {
    $sum += $numbFor[$i];
}
echo $sum;


echo "<br>" . "<hr>";

/* Задача 9
 * Дан массив с числами. С помощью цикла
 * найдите сумму квадратов элементов этого массива.
 */

/*
 * Через foreach
 */
$numsMulti = [1,2,3,4,5];

foreach ($numsMulti as $val) {
    $val *= $val;
    echo $val . ' '; // 1 4 9 16 25
}

echo "<br>";

/*
 * Через for
 */
$numsMulti = [1,2,3,4,5];
$sum = 0;
$length = count($numsMulti);

for ($i = 0; $i<$length; $i++) {
    $sum = $numsMulti[$i] * $numsMulti[$i];
    echo $sum . ' '; // 1 4 9 16 25
}


echo "<br>" . "<hr>";

/* Задача 10
 * Дан массив с числами. Найдите среднее
 * арифметическое его элементов (сумма элементов, делить на количество).
 */

/*
 * Через foreach
 */
$nums = [1,2,3,4,5];
$sum = 0;

foreach ($nums as $item) {
    $sum += $item;
}
echo $sum;


echo "<br>";

/*
 * Через for()
 */
$nums = [1,2,3,4,5];
$sum = 0;
$length = count($nums);

for ($i = 0; $i<$length; $i++) {
    $sum += $nums[$i];
}
$sum /= 2;
echo $sum; // 7.5

echo "<br>" . "<hr>";

/* Задача 11
 * Напишите скрипт, который будет находить факториал числа.
 * Факториал - это произведение всех целых чисел, меньше данного, и его самого.
 */

/*
 * Факториал числа 5
 */
$n = 5;

/*
 * Умножение начинается с еденицы $n = 1*2*3*4*5 = 120
 */
$factorial = 1;

/*
 * индекс $i = 1, если $i < $n то инкрементируется каждую итерацию +1 +2 +3 +4 +5
 */
for ($i = 1; $i <= $n; $i++) {
    /*
     * Далее умножаем факториал
     */
    $factorial *= $i;
}
echo $factorial; //120