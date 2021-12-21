<?php 
/**
 * Использование трейтов в трейтах
 */

/** Задача 1
 * Самостоятельно сделайте такие же трейты, как у меня и подключите их к классу Test. Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов.
 */

 trait Trait1
 {
 	private function method1()
 	{
 		return 1;
 	}

 	private function method2()
 	{
 		return 2;
 	}
 } 

 trait Trait2
 {
 	use Trait1;

 	private function method3()
 	{
 		return 3;
 	}
 }

 class Test
 {
 	use Trait2;

 	public function __construct()
 	{
 		echo $this->method1();
 		echo $this->method2();
 		echo $this->method3();
 	}
 }
 $test = new Test();
?>