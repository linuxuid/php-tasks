<?php
/*
 * Массив ассоциативных массивов
 */

/* Задача 1
 * Дан следующий массив :
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
 * Выведите с помощью этого массива 
 * столбец продуктов в каком-нибудь придуманном вами формате. 
 */

/*
 * Решение
 */

$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach ($products as $product) {
    echo 'Продукты -  ' . $product['name'] . " : Стоимость - " . $product['price'] . " : Количество - " . $product['amount']. "<br>";
}

echo "<br>" . "<hr>";
/* Задача 2
 * Добавьте в массив с продуктами из предыдущей задачи еще один продукт.
 */

$products[] = [
    'name' => 'морковка',
];

foreach ($products as $product) {
    echo 'Продукты -  ' . $product['name'] . "<br>";
}