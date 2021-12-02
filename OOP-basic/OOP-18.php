<?php
ini_set('error_reporting', 1);
error_reporting(E_ALL);

/**
 * Класс как набор методов в ООП на PHP
 */

/** Задача 1
 * vНапишите реализацию методов класса ArrayAvgHelper,
 * заготовки методов которого расположены ниже:
 */

class ArraySumHelper
{
    /*
        Находит сумму первых
        степеней элементов массива:
    */
    public function getAvg1($arr)
    {
        return $this->getSum($arr,1);
    }

    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */
    public function getAvg2($arr)
    {
        $sum = $this->getSum($arr,2);
        return $this->calcSqrt($sum, 1/2);

    }

    /*
        Находит сумму третьих степеней
        элементов массива и извлекает
        из нее кубический корень:
    */
    public function getAvg3($arr)
    {
        $sum = $this->getSum($arr,3);
        return $this->calcSqrt($sum,1/3);

    }

    /*
        Находит сумму четвертых степеней
        элементов массива и извлекает
        из нее корень четвертой степени:
    */
    public function getAvg4($arr)
    {
        $sum = $this->getSum($arr,4);
        return $this->calcSqrt($sum,1/4);
    }

    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem)
        {
            $sum += pow($elem, $power);
        }
        return $sum;
    }

    /*
        Вспомогательный метод, который параметром
        принимает целое число и степень и возвращает
        корень заданной степени из числа:
    */
    private function calcSqrt($num, $power)
    {
        return pow($num,1/$power);
    }
}
$arrSum = new ArraySumHelper();

$arr = [4,6,8];
echo $arrSum->getAvg1($arr) . "<br>";
echo $arrSum->getAvg2($arr) . "<br>";
echo $arrSum->getAvg3($arr) . "<br>";
echo $arrSum->getAvg4($arr) . "<br>";


?>