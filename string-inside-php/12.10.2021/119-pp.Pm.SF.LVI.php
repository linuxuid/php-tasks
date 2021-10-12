<?php
/*
 * Цикл и вставка переменных в PHP
 */

/* Задача 1
 * Упростите следующий код:

for ($i = 1; $i <= 10; $i++) {
	for ($j = 1; $j <= 10; $j++) {
		echo 'nums: ' . $i . ' ' . $j . '<br>';
	}
}
 */

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
       // echo "nums: $i , $j <br>";
    }
}

/* Задача 2
 * Упростите следующий код:

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($arr as $key => $elem) {
	echo 'pair: ' . $elem . ' ' . $key . '<br>';
}
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($arr as $key => $elem) {
   // echo "pair: $elem $key <br>";
}

/* Задача 3
 * Дан следующий массив:
$products = [
	[
		'name'   => 'product1',
		'price'  => 100,
		'amount' => 5,
	],
	[
		'name'   => 'product2',
		'price'  => 200,
		'amount' => 6,
	],
	[
		'name'   => 'product3',
		'price'  => 300,
		'amount' => 7,
	],
];
Выведите с помощью этого массива столбец продуктов в каком-нибудь придуманном вами формате.
 */

$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach($products as $item) {
    echo " name : {$item['name']} <br>";
    echo " price : {$item['price']} <br>";
    echo " amount : {$item['amount']} <br>";
    echo "<hr>";
}