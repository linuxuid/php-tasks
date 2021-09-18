<?php
/*
 * Получение соседей элементов в массиве PHP
 */

/* Задача 1
 * Дан массив с числами. Переберите его циклом и
 * в каждой итерации цикла выведите следующий элемент массива.
 */

$arrOne = [1, 2, 3, 4, 5];
$length = count($arrOne);

for ($i = 0; $i < $length; $i++) {
    echo $arrOne[$i + 1] . ' ';
}


echo "<br>" . "<hr>";
/* Задача 2
 * Модифицируйте предыдущую задачу так, чтобы в каждой
 * итерации цикла выводилась сумма текущего и следующего элемента массива.
 */

$arrTwo = [1, 2, 3, 4, 5];
$length = count($arrTwo);

for ($i = 0; $i < $length; $i++) {
    echo $arrTwo[$i] + 1 . ' ';
}

echo "<br>" . "<hr>";
/* Задача 3
 * Дан массив с числами. Переберите его циклом и
 * в каждой итерации цикла выведите два предыдущих элемента массива.
 */

/*
 * 1-й вариант
 */
$arrThree = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$length = count($arrThree);

for ($i = 1; $i < $length; $i++) {
    echo $arrThree[$i - 9] . ' '; // Если правильно понял задачу output : 1 2
}

echo "<br>";

/*
 * 2-й вариант
 */
$arrThreeSecond = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$length = count($arrThreeSecond);

for ($i = 1; $i < $length; $i++) {
    if ($arrThreeSecond[$i] >= 10 or $arrThreeSecond[$i] <= -2) {
        echo $arrThreeSecond[$i] . ' '; // Два предыдущих элемента 10 и 11
    }
}

echo "<br>" . "<hr>";
/* Задача 4
 *  Модифицируйте предыдущую задачу так, чтобы в каждой итерации цикла
 * выводилась сумма двух предыдущих элементов и текущего элемента массива.
 */

$arrFour = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$length = count($arrFour);

for ($i = 0; $i < $length; $i++) {
    if ($arrFour[$i] >= 10 or $arrFour[$i] <= -2) {
        echo $arrFour[$i] + $arrFour[$i] . ' '; // Два предыдущих элемента 10 и 11
    }
}


echo "<br>" . "<hr>";
/* Задача 5
 * Дан массив с числами. Переберите его циклом и в каждой итерации цикла
 * выведите сумму предыдущего, текущего и следующего элементов массива.
 */

$arrFive = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$length = count($arrFive);

for ( $i = 0; $i < $length; $i++ ) {
    if ($arrFive[$i] >= 11 or $arrFive[$i] <= 2) {
        echo $arrFive[$i] + $arrFive[$i] . ' '; // элементы 1 , 2 , 11 ++ 2 , 4 , 22
    }
}

