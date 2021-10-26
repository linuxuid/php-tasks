<?php
/*
 * Однократное подключение файлов в PHP
 */

/* Задача 1
 * Сделайте несколько файлов с полезными наборами функций.
 * Подключите эти файлы друг к другу и к вашему основному файлу.
 */

require_once '159-file1.php';
require_once '159-file2.php';

$num_1 = getDivisors(4);
$num_2 = getDivisors(12);

echo "<pre>";
var_dump(array_intersect($num_1,$num_2));

/*
 * Сумма
 */

echo getSum(array_intersect($num_1,$num_2));

?>