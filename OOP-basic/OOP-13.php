<?php
ini_set('error_reporting', 1);
error_reporting(E_ALL);

/**
 * Начальные значения свойств при объявлении
 */

/** Задача 1
 * Реализуйте класс Arr, похожий на тот, который я реализовал выше.
 * В отличие от моего класса метод add вашего класса
 * параметром должен принимать массив чисел.
 * Все числа из этого массива должны
 * добавляться в конец массива $this->numbers.
 */

/** Задача 2
 * Реализуйте также метод getAvg, который будет находить среднее арифметическое чисел.
 */

class Arr
{
    private $numbers = [4,5,6];

    /**
     * @return
     */
    public function add(array $numbers)
    {
       array_push($this->numbers, $numbers);
       return $this;
    }

    public function isAverage($arr)
    {
        $arr = array_filter($arr);
        if (count($arr)){
            echo $average = array_sum($arr) / count($arr);
        }
    }

    /**
     * @return
     */
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
$obj1 = new Arr();
?>