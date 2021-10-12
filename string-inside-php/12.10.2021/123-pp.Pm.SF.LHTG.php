<?php
/*
 * Цикл и генерация HTML таблиц на PHP
 */

/* Задача 1
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
 * Сформируйте с его помощью HTML таблицу.
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

echo "<table>";

foreach ($products as $item) {
    echo "<tr>";
    /*
     * Таблица <td>
     */
    echo "<td>{$item['name']}</td>";
    echo "<td>{$item['price']}</td>";
    echo "<td>{$item['amount']}</td>";
    /*
     * end <td>
     */
    echo "</tr>";
}
echo "</table>";