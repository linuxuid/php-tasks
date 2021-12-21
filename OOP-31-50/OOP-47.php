<?php 
/**
 * Разрешение конфликтов в трейтах
 */ 

/** Задача 1
 * Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method, возвращающий 1, во втором трейте - одноименный метод, возвращающий 2, а в третьем трейте - одноименный метод, возвращающий 3
 */

 /** Задача 2
 * Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов.
 */

 trait Trait1
 {
 	public function method()
 	{
 		return 1;
 	}
 }

 trait Trait2
 {
 	public function method()
 	{
 		return 1;
 	}
 } 

 trait Trait3
 {
 	public function method()
 	{
 		return 1;
 	}
 } 

 class Test
 {
 	use Trait1, Trait2, Trait3
 	{
 		Trait1::method insteadof Trait2;
 		Trait2::method insteadof Trait1;
 		Trait1::method as method1;
 		Trait2::method as method2;
 		Trait3::method as method3;
 	}
 	public function getSum()
 	{
 		return $this->method1() + $this->method2() + $this->method3();
 	}
 }
 $test = new Test;
 echo $test->getSum();
?>