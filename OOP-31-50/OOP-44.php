<?php 
/**
 * Константы в интерфейсе в ООП на PHP
 */

 /** Задача 1
  * Сделайте класс Sphere, который будет реализовывать интерфейс iSphere.
  */  
 interface iSphere
 {
 	const PI = 3.14;

 	public function __construct($radius);

 	// method for finding the volume of a sphere
 	public function getVolume();
 	// method for finding the square of sphere
 	public function getSquare();
 }

 class Sphere 
 {
 	const PI = 3.14;
 	private $radius;

 	public function __construct($radius)
 	{
 		$this->radius = $radius;
 	}

 	public function getVolume()
 	{
 		 return  'volume : ' . 4/3 * self::PI * pow($this->radius, 3) . "<br>";
 	}

 	public function getSquare()
 	{
 		return  'square : ' . 4 * self::PI * pow($this->radius,2) . "<br>";
 	}
 }
 $sphere = new Sphere(3);

 // get volume and square of sphere
 echo  $sphere->getVolume();
 echo  $sphere->getSquare();
?>