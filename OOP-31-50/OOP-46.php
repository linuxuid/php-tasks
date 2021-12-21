<?php 
/**
 * Работа с трейтами в ООП на PHP
 */ 

/** Задача 1
 * Реализуйте класс Country со свойствами name, age, population и геттерами для них. Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper.
 */

 /** Задача 2
 * Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method1, возвращающий 1, во втором трейте - метод method2, возвращающий 2, а в третьем трейте - метод method3, возвращающий 3. Пусть все эти методы будут приватными.
 */
 /** Задача 3
 * Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов.
 */ 

 trait Helper
 {
 	private $name;
 	private $age;
 	private $population;

 	public function getName()
 	{
 		return $this->name;
 	}

 	public function getAge()
 	{
 		return $this->age;
 	}

 	public function getPopulation()
 	{
 		return $this->population;
 	}
 }

 class Country
 {
 	use Helper; // use trait

 	public function __construct($name, $age, $population)
 	{
 		$this->name = $name;
 		$this->age = $age;
 		$this->population = $population;
 	}
 }

trait Trait1
{
	private function method1()
	{
		return 1;
	}
}

trait Trait2
{
	private function method2()
	{
		return 2;
	}
}

trait Trait3
{
	private function method3()
	{
		return 3;
	}
}

class Test
{
	use Trait1, Trait2, Trait3;

	public function getSum()
	{
		return $this->method1() + $this->method2() + $this->method3();
	}
}
$test = new Test();
echo $test->getSum();
?>