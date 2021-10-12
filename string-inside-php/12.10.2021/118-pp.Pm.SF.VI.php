<?php
/*
 * Вставка переменных в PHP
 */

/* Задача 1
 * Упростите следующий код:
$name = 'user';
echo 'hello, ' . $name . '!';
 */

$name = 'user';
echo "hello $name !";

/* Задача 2
 * Упростите следующий код:
$arr = ['1', '2', '3'];
echo 'aaa ' . $arr[0] . ' bbb ' . $arr[1];
 */

$arr = ['1', '2', '3'];
echo "aaa $arr[0] bbb $arr[1]";

/* Задача 3
 * Упростите следующий код:
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text';
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo "text {$arr['a']} text {$arr['b']} text'";