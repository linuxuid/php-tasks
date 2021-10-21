<?php
/*
 * Карманы при поиске через регулярки на PHP
 */

/* Задача 1
 * Дана строка с датой: $str = '2025-12-31';
 * Положите год, месяц и день в отдельные карманы.
 */

$str = '2025-12-31';
$reg = '#([0-9]+)\-([0-9]+)\-([0-9]+)#';
preg_match($reg,$str,$res);

/*
 * output
 */

/*
array(4) {
  [0]=>
  string(10) "2025-12-31"
  [1]=>
  string(4) "2025"
  [2]=>
  string(2) "12"
  [3]=>
  string(2) "31"
}
*/

/* Задача 2
 * Дана строка с именем файла: $str = 'index.html';
 * Положите имя файла и его расширение в отдельные карманы.
 */

$str = 'index.html';
$res = '#([a-z]+)\.([a-z]+)#';
preg_match($res,$str,$reg);

echo "<pre>";
var_dump($reg);

/*
 * output
 */

/*
array(3) {
  [0]=>
  string(10) "index.html"
  [1]=>
  string(5) "index"
  [2]=>
  string(4) "html"
}
 */