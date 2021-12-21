<?php 
/**
 * Абстрактные методы трейтов
 */

 /** Задача 1
 * Скопируйте код моего трейта TestTrait и код моего класса Test. Удалите из класса метод method2. Убедитесь в том, что отсутствие его реализации приведет к ошибке PHP.
 */ 

 trait TestTrait
 {
 	public function method1()
 	{
 		return 1;
 	}

 	abstract public function method2();
 }

 class Test 
 {
 	user TestTrait;
 }

?>