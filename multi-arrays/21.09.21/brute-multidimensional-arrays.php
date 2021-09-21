<?php
/*
 * Перебор многомерных массивов
 */

/* Задача 1
 * Дан следующий массив :
 * С помощью двух вложенных циклов найдите сумму элементов этого массива.
 */

$sum = 0;
$arr = [
    [1, 2, 3],
    [4, 5, 6, 7],
    [8, 9]
];

foreach ($arr as $item) {
    foreach ($item as $item2) {
        $sum += $item2;

    }
}
echo 'Сумма двухмерного массива : ' . $sum;

echo "<br>" . "<hr>";
/*
 * Трехмерный массив
 */

/* Задача 2
 * Дан следующий массив:
 * С помощью трех вложенных циклов найдите сумму элементов этого массива.
 */

$sum = 0;
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];

foreach ($arr as $item) {
    foreach ($item as $item2) {
        foreach ($item2 as $item3) {
            $sum += $item3;
        }
    }
}
echo 'Сумма трёхмерного массива : ' . $sum;

echo "<br>" . "<hr>";
/* Задача 3
 * Дан следующий массив :
 * выведите элементы этого массива в формате ключ-значение
 */

$arr = [
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

foreach ($arr as $key => $val) {
    foreach ($val as $key2 => $val2) {
        echo 'Key : ' . $key2 . ' - value : ' . $val2 . "<br>";
    }
}

echo "<br>" . "<hr>";
/* Задача 4
 * Дан следующий массив
 * С помощью двух вложенных циклов выведите
 * элементы этого массива в формате имя группы - имя юзера.
 */

$arr = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];

foreach ($arr as $key => $item) {
    foreach ($item as $key2 => $item2 ) {
        echo 'name group ' . $key2 . ' - name user :' . $item2 . "<br>";
    }
}