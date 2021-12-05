<?php 

/** Задача 1
 * Сделайте класс Num, у которого будут два публичных статических 
 * свойства: num1 и num2. Запишите в первое свойство число 2, 
 * а во второе - число 3. Выведите сумму значений свойств на экран. 
 */

 /** Задача 2
  * Сделайте класс Num, у которого будут два приватны статических 
  * свойства: num1 и num2. Пусть по умолчанию в 
  * свойстве num1 хранится число 2, а в свойстве num2 - число 3. 
  */

 /** Задача 3
  * Сделайте в классе Num метод getSum, который будет 
  * выводить на экран сумму значений свойств num1 и num2. 
  */

 /** Задача 4
  * Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. 
  * С помощью этого метода выведите на экран объем шара с радиусом 10. 
  */ 
class Num2
{
    public static $num1 = 2;
    public static $num2 = 3;
}
echo Num2::$num1 + Num2::$num2; // 5

/**
 * another class
 */
class Num
{
    private static $num3 = 2;
    private static $num4 = 3;

    public function getSum()
    {
        return self::$num3 + self::$num4;
    }
}

/**
 * one more class Geometry
 */
class Geometry 
{
    private static $pi = 3.14;

    // square circle
    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    // square circle
    public static function getCircleCurcuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    // the volume of the sphere along the radius
    public static function getSphereRadius($radius)
    {
        return 4/3 * self::$pi * $radius;
    }
}



?>