<?php
/**
 * Константы классов в ООП на PHP
 */ 

/** Задача 1
 * Реализуйте предложенный класс Circle самостоятельно. 
 */

/** Задача 2
 * С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10. 
 */ 

class Circle
{
	const PI = 3.14;
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getSquare($radius)
	{
		return self::PI * pow($radius, 2);
	}

	public function getCircuit($radius)
	{
		return 2 * self::PI * $radius;
	}
}
$circle = new Circle(10);
echo $circle->getSquare(10) . "<br>";
echo $circle->getCircuit(10);


?>