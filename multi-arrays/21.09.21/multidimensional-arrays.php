<?php
/*
 * Многомерные массивы
 */

/* Задача 1
 * Дан многомерный массив, выведите с его помощью элементы
 * текстом : l', 'e', 'g' и 'a'.
 */

$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];

foreach ($arr as $key => $item) {
    foreach ($item as $key2 => $item2) {
        echo "$key and $key2 " . $item2 . "<br>";
    }
}
/*
 * Вывод букв : lega
 */
echo $arr[3][2]; // l
echo $arr[1][1]; // e
echo $arr[2][0]; // g
echo $arr[0][0]; // a

echo "<br>" . "<hr>";

/* Задача 2
 * Дан многомерный массив : найдите сумму всех его элементов
 */

/*
 * С помощью цикла foreach()
 */
$arr = [[1, 2], [3, 4], [5, 6]];
$sum = 0;

foreach ($arr as $item) {
    foreach ($item as $item2) {
        $sum += $item2;
    }
}
echo $sum . ' '; // 21

echo "<br>";
/*
 * Поцедурный подход
 */

$arr = [[1, 2], [3, 4], [5, 6]];
$sum = $arr[0][0] + $arr[0][1];
$sum1 = $arr[1][0] + $arr[1][1];
$sum2 = $arr[2][0] + $arr[2][1];

$result = $sum + $sum1 + $sum2;
echo $result; // 21

echo "<br>" . "<hr>";

/* Задача 3
 * Дан следующий массив : Найдите сумму всех эелементов приведенного массива
 */

$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
$sum = 0;

foreach ($arr as $item) {
    foreach ($item as $item2) {
        foreach ($item2 as $item3) {
            $sum += $item3; // 36
        }
    }
}
echo $sum;

echo "<br>";

/*
 * Процедурный подход
 */
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];

/*
 * Узнать ключи через foreach()
 */
foreach ($arr as $key => $val) {
    foreach ($val as $key2 => $val2) {
        foreach ($val2 as $key3 => $val3) {
            echo 'keys : ' . $key . ' ' . $key2 . ' ' . $key3 . ' value : ' . $val3 . "<br>";
        }
    }
}

/*
 * Сложение
 */
$sum1 = $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1];
$sum2 = $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];
$sum = $sum1 + $sum2;

/*
 * Вывод
 */
echo $sum; // 36

echo "<br>" . "<hr>";

/* Задача 4
 * дан следующий массив :
 * Выведите с помощью этого массива имя первого мальчика и имя второй девочки.
 */

$associatedArr = [
    'boys' => [1 => 'kolya', 2 => 'Vasya', 3 => 'Petya'],
    'girls'=> [1 => 'Dasha', 2 => 'Masha', 3 => 'Lena'],
];
echo $associatedArr['boys'][1] . ' ' . $associatedArr['girls'][2];

echo "<br>" . "<hr>";
/* Задача 5
 * Дан следующий массив :
 * Выведите с помощью этого массива английское название среды.
 */

$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];

echo $arr['en'][2];

echo "<br>" . "<hr>";
/* Задача 6
 * Дан массив
 * Вывеодите с помощью этого массив сумму зарплат первого и третьего юзера
 */
$arrSalary = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

echo $arrSalary[0]['salary'] + $arrSalary[2]['salary'];

echo "<br>" . "<hr>";
/* Задача 7
 * Дан следующий массив:
 * Найдите сумму всех элементов приведенного массива,
 * обратившись к каждому элементу по его ключу.
 */

$arrW = [
    [
        1, 2, 3, [4, 5, [6, 7]]
    ],
    [
        8, [9, 10]
    ]
];
extract($arrW);

echo "<pre>";
var_dump($arrW);
echo "</pre>";

echo "<br>";

$sum1 = $arrW[0][0] + $arrW[0][1] + $arrW[0][2];
$sum2 = $arrW[0][3][0] + $arrW[0][3][1];
$sum3 = $arrW[1][0] + $arrW[1][1][0] + $arr[1][1][1];

$sum = $sum1 + $sum2 + $sum3;
echo $sum;