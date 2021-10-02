<?php
/*
 * Логические операторы без if в функциях PHP
 * hash : pp.Pm.UF.LO
 */

/* Задача 1
Дана следующая функция:
	function func($a, $b) {
		if ($a === $b) {
			return true;
		} else {
			return false;
		}
	}
 * Перепишите ее код в сокращенной форме согласно изученной теории.
 */

/*
 * Решение :
 */
function func($a, $b) {
    return $a === $b;

}
echo func(2,2); // true

echo "<br>";

/* Задача 2
Дана следующая функция:
	function func($a, $b) {
		if ($a !== $b) {
			return true;
		} else {
			return false;
		}
	}
 * Перепишите ее код в сокращенной форме согласно изученной теории.
 */

function foo($a,$b) {
    return $a !== $b;
}
echo foo(2,3); // true

/* Задача 3
Дана следующая функция:
	function func($a, $b) {
		if ($a + $b >= 10) {
			return true;
		} else {
			return false;
		}
	}
 * Перепишите ее код в сокращенной форме согласно изученной теории.
 */

function foo2($a, $b) {
    return $a + $b >= 10;
}
echo foo2(5,5); // true

echo "<br>";

/* Задача 4
Дана следующая функция:
	function func($num) {
		if ($num >= 0) {
			return true;
		} else {
			return false;
		}
	}
 * Перепишите ее код в сокращенной форме согласно изученной теории.
 */

function foo3($num) {
    return $num >= 0;
}
echo foo3(2); // true