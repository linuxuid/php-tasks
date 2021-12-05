<?php
/**
 * static methods
 */

 /**
  * example static methods
  */
class Math
{
    public static function getSum($a, $b)
    {
        return $a + $b;
    }

    public static function getProduct($a, $b)
    {
        return $a * $b;
    }
}
echo Math::getSum(4,3);

/** Задача 1
 * Переделайте методы класса ArraySumHelper на статические. 
 */

 /** Задача 2
 * Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper 
 * сумму квадратов элементов этого массива. 
 */

 class ArraySumHelper
 {
     public static function getSum1($arr)
     {
         return self::getSum($arr, 1);
     }

     public static function getSum2($arr)
     {
         return self::getSum($arr, 2);
     }

     public static function getSum3($arr)
     {
         return self::getSum($arr, 3);
     }

     public static function getSum4($arr)
     {
         return self::getSum($arr, 4);
     }

     public static function getSum($arr, $power)
     {
         $sum = 0;
         foreach($arr as $elem){
             $sum += pow($elem, $power);
         }
         return $sum;
     }
 }
 $array = [2, 4, 6];
 echo ArraySumHelper::getSum2($array); // 56
?>