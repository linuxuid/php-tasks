<?php
/*
 * Генерация тегов в PHP
 */

/* Задача 1
 * Даны три переменные:
	$text1 = 'aaa';
	$text2 = 'bbb';
	$text3 = 'ccc';
 * Выведите каждую из этих переменных в отдельном абзаце.
 */

$text1 = 'aaa';
$text2 = 'bbb';
$text3 = 'ccc';

echo "<p>$text1</p>"; // 1
echo "<p>$text2</p>"; // 2
echo "<p>$text3</p>"; // 3

/* Задача 2
 * Даны три переменные:
	$src1 = '1.png';
	$src2 = '2.png';
	$src3 = '3.png';
 * Сформируйте с помощью этих переменных три тега img.
 */

$src1 = '1.png';
$src2 = '2.png';
$src3 = '3.png';

echo "<img src=\"$src1\" alt='' title=''>";
echo "<img src=\"$src2\" alt='' title=''>";
echo "<img src=\"$src3\" alt='' title=''>";
