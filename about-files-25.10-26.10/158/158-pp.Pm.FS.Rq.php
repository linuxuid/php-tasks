<?php
/*
 * Подключение файлов в PHP
 */

/* Задача 1
 * Сделайте файл с полезным набором функций. Подключите его к вашему основному файлу.
 */

require '158-file.php';

echo square(4);

echo "<pre>";
var_dump(getDividers(14));

$arr = [2,4,6,8,12];
echo sum($arr);

?>