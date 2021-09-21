<?php
/*
 * Заполнение многомерных массивов
 */

/* Задача 1
 * Сформируйте с помощью двух вложенных циклов следующий массив:
 * [[1, 2, 3, 4, 5], [1, 2, 3, 4, 5], [1, 2, 3, 4, 5]]
 */
$num = [];

for ($i = 0; $i< 3; $i++) {
    for ($j = 0; $j<5; $j++) {
        $num[$i][$j] = $j + 1;
    }
}
echo '<pre>';
print_r($num);

echo "<br>" . "<hr>";

/* Задача 2
 * Сформируйте с помощью двух вложенных циклов следующий массив:
 * [['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x'], ['x', 'x',
	'x', 'x']]
 */

$str = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $str[$i][$j] = 'x';
    }
}
echo '<pre>';
print_r($str);

/* Задача 3
 * Сформируйте с помощью трех вложенных циклов следующий массив :
[
	[
		[1, 2, 3, 4, 5],
		[1, 2, 3, 4, 5],
	],
	[
		[1, 2, 3, 4, 5],
		[1, 2, 3, 4, 5],
	],
	[
		[1, 2, 3, 4, 5],
		[1, 2, 3, 4, 5],
	],
]
 */

$multi = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($k = 0; $k < 5; $k++) {
            $multi[$i][$j][$k] = $k + 1;
        }
    }
}

/*
 * Вывод : трехмерный массив
 */
echo "<pre>";
print_r($multi);

echo "<br>" . "<hr>";

/*
 * Заполнение числами по порядку
 */

/* Задача 4
 * Сформируйте с помощью двух вложенных циклов следующий массив:
 * [[1, 2], [3, 4], [5, 6], [7, 8]]
 */

$nums = [];
$k = 1;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $nums[$i][$j] = $k++;
    }
}
echo "<pre>";
print_r($nums);

echo "<br>" . "<hr>";

/* Задача 5
 * Сформируйте с помощью двух вложенных циклов следующий массив:
 * [[2, 4, 6], [8, 10, 12], [14, 16, 18], [20, 22, 24]]
 */

$nums = [];
$k = 2;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++, $k += 2) {
        $nums[$i][$j] = $k;
    }
}
echo '<pre>';
print_r($nums);

echo "<br>" . "<hr>";

/* Задача 6
 * Сформируйте с помощью трех вложенных циклов следующий трехмерный массив:
 * [
 *  [
 *      [1, 2], [3, 4]
 *  ],
 *
 *  [
 *      [5, 6], [7, 8]
 *  ]
 * ]
 */

$multi = [];
$num = 1;

for ($i = 0; $i <2; $i++){
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k<2; $k++) {
            $multi[$i][$j][$k] = $num++;
        }
    }
}
echo "<pre>";
print_r($multi);