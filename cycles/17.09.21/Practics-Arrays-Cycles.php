<?php
/*
 * Практика на массивы в цикле в PHP
 */

/* Задача 1
 * Дан следующий массив с работниками и их зарплатами
 * Увелиться зарплату каждого работника на 10%
 */

/*
 * Решение в ЛОБ
 */
$arrOne = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];

$arrOne['employee1'] += 10;
$arrOne['employee2'] += 10;
$arrOne['employee3'] += 10;
$arrOne['employee4'] += 10;
$arrOne['employee5'] += 10;
$arrOne['employee6'] += 10;
$arrOne['employee7'] += 10;

echo "<pre>";
print_r($arrOne);
echo "</pre>";

/*
 * Решение через цикл
 */

$employeeArr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
$result = 10;
foreach ($employeeArr as $item) {
    $item += $result; // Можно просто +=10
    echo $item . ' ';
}

echo "<br>" . "<hr>";
/* Задача 2
 * Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась
 * только тем работникам, у которых она меньше или равна 400.
 */

$arrTwo = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];

foreach ($arrTwo as $item) {
    if ($item <= 400) {
        $item += 10;
    }
    echo $item . ' '; // Увеличина только тем у кого <= 400
}

echo "<br>" . "<hr>";
/* Задача 3
 * Дан следующий массив: $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
 * Найдите сумму ключей этого массива и поделите ее на сумму значений.
 */

$arrThree = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sum = 0; // Сумма ключей
$sum2 = 0; // Сумма значений
$result = 0; // Деление суммы

foreach($arrThree as $key => $item ) {
    if ($key <= 5) {
        $sum += $key; // 15
    } if ($item <= 10) {
        $sum2 += $item; // 40
    }
    $result = $sum2 / $sum; // 40 / 15
}
echo $result; // 2.6666666666667

echo "<br>" . "<hr>";
/* Задача 4
 * Дан следующий массив
 * Запишите ключи этого массива в один массив, а значения - в другой.
 */

/*
 * Решение в ЛОБ
 */
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e'
=> 5];
$arrKeys = [];
$arrValues = [];

foreach ($arr as $key => $item) {
    $arrKeys[] = $key;
    $arrValues[] = $item;
}
echo "<pre>";
print_r($arrValues);
echo "</pre>";

echo "<pre>";
print_r($arrKeys);
echo "</pre>";

echo "<br>" . "<hr>";

/* Задача 5
 * Дан следующий массив
 * 	$arr = [
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
	];
 * Запишите в новый массив элементы, значение которых начинается с цифры 1 или цифры 2.
 * То есть у вас в результате получится вот такой массив:
 * [
		125,
		225,
		128,
		145,
		281,
	];
 */

$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];

$arrNew = [];
foreach ($arr as $key => $item) {
    if ($key <=3 or $key >= 5 and $key < 7) {
        $arrNew[] = $item;
    }
}
echo "<pre>";
print_r($arrNew);
echo "</pre>";

?>