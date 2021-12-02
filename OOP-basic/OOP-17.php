<?php

ini_set('error_reporting', 1);
error_reporting(E_ALL);

/**
 * Цепочки методов
 */

/** Задача 1
 * Не подсматривая в мой код самостоятельно реализуйте такой же
 * класс Arr, методы которого будут вызываться в виде цепочки.
 */

class Arr
{
    private $numbers = [];

    /**
     * @param $num
     */
    public function add($num)
    {
        $this->numbers[] = $num;
        return $this;
    }

    /**
     * @param $numbers
     */
    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }

    /**
     * @return float|int
     */
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
$arr = new Arr();
echo $arr->add(1)->add(2)->push([3,4])->getSum();


?>