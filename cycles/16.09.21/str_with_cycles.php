<?php
/*
 * Формирование строк через циклы в PHP
 */


/* Задача 1
 * С помощью цикла сформируйте строку
 * накопленную 5-ю нулями
 */

$strOne = '';
for ($i=0; $i < 5; $i++) {
    $strOne .= '0';
}
echo 'Задача 1 : ' . $strOne;

echo "<br>" . "<hr>";

/* Задача 2
 * С помощью цикла сформируйте строку '123456789'
 * и запишите ее в переменную $str.
 * Выведите значение этой переменной на экран.
 */

// Через цикл "for"
$strTwoFor = '';
for ($i = 1; $i <= 9; $i++) {
    $strTwoFor .= $i;
}
echo 'Задача 2 (цикл for): ' . $strTwoFor;

echo "<br>";

// Через цикл "while"
$strTwoWhile = '';
$num = 1;
while ($num <= 9) {
    $strTwoWhile.=$num;
    $num++;
}
echo 'Задача 2 (цикл while)' . $strTwoWhile;

echo "<br>" . "<hr>";

/* Задача 3
 * С помощью цикла сформируйте строку '987654321' и запишите
 * ее в переменную $str.
 * Выведите значение этой переменной на экран.
 */

// Через For
$strThreeFor = '';
for ($i = 9; $i >= 1; $i--) {
    $strThreeFor .= $i;
}
echo 'Задача 3 (цикл for) : ' . $strThreeFor;

echo "<br>";

// Через While
$strThreeWhile = '';
$num = 9;
while ($num >= 1) {
    $strThreeWhile .= $num;
    $num--;
}
echo 'Задача 3 (цикл while) : ' . $strThreeWhile;

echo "<br>" . "<hr>";

/* Задача 4
 * С помощью цикла сформируйте строку '-1-2-3-4-5-6-7-8-9-'
 * и запишите ее в переменную $str.
 * Выведите значение этой переменной на экран.
 */

// Через for
$strFourFor = '-';
for ($i = 1; $i < 10; $i++) {
    $strFourFor = $strFourFor . $i . '-';
}
echo 'Задача 4 (цикл for) : ' . $strFourFor;

echo "<br>";

// Через while
$strFourWhile = '-';
$num = 1;
while ($num < 10) {
    $strFourWhile = $strFourWhile . $num . '-';
    $num++;
}
echo 'Задача 4 (цикл for) : ' . $strFourWhile;