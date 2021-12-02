<?php
/**
 * Вызов метода сразу после создания объекта
 */

/** Задача 1
 * Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его
 * метод getSum сразу после создания объекта.
 */

class Arr
{
    /**
     * @var array
     */
    private $numbers = []; // numbers in array

    /**
     * @param $numbers
     */
    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @param $num
     */
    public function add($num)
    {
        $this->numbers[] = $num;
    }

    /**
     * @return float|int
     */
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
echo (new Arr([3,4,5]))->getSum();
?>