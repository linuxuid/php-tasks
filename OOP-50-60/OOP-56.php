<?php 
/**
 * Магический метод set
 */

 /** Задача 1
 * Переделайте код этого класса так, чтобы вместо геттеров и сеттеров использовались магический методы __get и __set.
 */ 

 class User
 {
 	private $name;
 	private $age;

 	public function __get($property)
 	{
 		return $this->$property;
 	}

 	public function __set($property, $value)
 	{
 		if ($property != '') {
 			$this->$property = $value;
 		}
 		if ($property >= 0 and $property <= 70) {
 			$this->$property = $value;
 		}
 	}
 }
 $user = new User();

 $user->name = 'Alexey';
 $user->age = 18;

 echo $user->name; // Alexey
 echo $user->age; // 18
?>