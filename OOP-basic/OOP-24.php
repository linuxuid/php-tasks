<?php
ini_set('error_reporting', 1);
error_reporting(E_ALL);

/**
 * Использование классов внутри других классов
 */

/** Задача 1
 * Самостоятельно повторите описанные мною классы Arr и SumHelper.
 */

/** Задача 4
 * Добавьте в класс Arr метод getAvgMeanSum, который будет находить
 * сумму среднего арифметического и среднего квадратичного из массива $this->nums.
 */

/**
 * helper method
 */
class SumHelper
{
    /**
     * @param $arr
     * @return float|int|object
     * sum of squares
     */
    public function getSum2($arr)
    {
        return $this->getSum($arr,2);
    }

    /**
     * @param $arr
     * @return float|int|object
     * sum of cub
     */
    public function getSum3($arr)
    {
        return $this->getSum($arr,3);
    }

    /**
     * @param $arr
     * @param $power
     * @return float|int|object
     * Helper method
     */
    private function getSum($arr,$power)
    {
        $sum = 0;
        foreach ($arr as $item) {
            $sum += pow($item, $power);
        }
        return $sum;
    }
}

class Arr
{
    /**
     * @var array
     */
    private $nums = [];
    /**
     * object of class
     */
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
    }

    /**
     * sum of squares and cubs of element array
     */
    public function getSum23()
    {
        $nums = $this->nums;

        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }

    public function getAvgMeanSum($arr)
    {
        $count = count($arr);
        $sum = 0;
        $sum_2 = 0;
        foreach ($arr as $item){
            $sum += $item;
            $sum_2 += pow($item, 2);
        }
        return $sum / $count . ' : ' . sqrt($sum_2) / $count;
    }

    /**
     * @param $num
     */
    public function add($num)
    {
        $this->nums[] = $num;
    }
}
$arr = new Arr(); // создаем объект

$arr->add(1); // добавляем в массив число 1
$arr->add(2); // добавляем в массив число 2
$arr->add(3); // добавляем в массив число 3

// Находим сумму квадратов и кубов:
echo $arr->getSum23();

echo "<br>";

/** Задача 2
 * Создайте класс AvgHelper с методом getAvg, который параметром будет
 * принимать массив и возвращать
 * среднее арифметическое этого массива
 * (сумма элементов делить на количество).
 */

/** Задача 3
 * Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет
 * принимать массив и возвращать среднее квадратичное этого массива (квадратный корень,
 * извлеченный из суммы квадратов элементов, деленной на количество).
 */


 class AvgHelper
 {
     public function getAvg($arr)
     {
         $count = count($arr);
         $sum = 0;
         foreach ($arr as $item) {
             $sum += $item / $count;
         }
         return $sum;
     }

     /**
      * @param $arr
      * @return float|int
      * MeanSquare method
      */
     public function getMeanSquare($arr)
     {
         $count = count($arr);
         $sum = 0;
         foreach ($arr as $item) {
             $sum += pow($item, 2);
         }
         return sqrt($sum) / $count;
     }
 }
