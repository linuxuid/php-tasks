<?php
/**
 * Функции для работы с классами и объектами
 */ 

/** Задача 1
 * Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект. 
 */

 class TaskOne
 {
 	function getName()
 	{
 		echo "I\'m John " . get_class($this);
 	}
 }

 $taskOne = new TaskOne();
 echo get_class($taskOne);

 /** Задача 2
  * Сделайте два класса: Test1 и Test2. Пусть оба класса имеют свойство name. Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке. Переберите этот массив циклом и для каждого объекта выведите значение его свойства name и имя класса, которому принадлежит объект. 
  */
echo "<br>";

class Test1
{
	public $name = 'Test1';
}

class Test2 
{
	public $name = 'Test2';
}

$arr = [
	new Test1(),
	new Test2(),
	new Test1(),
	new Test2()
];
foreach ($arr as $object) {
	echo 'name object : ' . get_class($object) . ' : property : ' . $object->name . "<br>";
}

echo "<br>";

   /** Задача 3
  * Сделайте класс Test с методами method1, method2 и method3. С помощью функции get_class_methods получите массив названий методов класса Test. 
  */

      /** Задача 4
  * Создайте объект класса Test, запишите его в переменную $test. С помощью функции get_class_methods получите массив названий методов объекта. Переберите его циклом и в цикле вызовите каждый метод класса, используя объект $test. Переберите этот массив циклом и в этом цикле вызовите каждый метод объекта. 
  */
   class Test
   {
   	public function method1()
   	{

   	}

   	public function method2()
   	{

   	}

   	public function methdo3()
   	{

   	}
   }
$test = get_class_methods(new Test);
foreach($test as $method){
	echo $method . "<br>";
}

$objTest = new Test();
$testTwo = get_class_methods($objTest);

foreach($testTwo as $methods){
	echo $methods . "<br>";
}

   /** Задача 5
  * Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4. 
  */

   /** Задача 6
  * Вызовите функцию get_class_vars снаружи класса Test. Выведите массив доступных свойств. 
  */
   
   /** Задача 7
  * Вызовите функцию get_class_vars внутри класса Test (например, в конструкторе). Выведите массив доступных свойств. 
  */

class TestClass
{
	public $prop1;
	public $prop2;
	private $prop3;
	private $prop4;

	public function __construct()
	{
			
	}
}
$testClass = new TestClass();
$class_vars = get_class_vars(get_class($testClass));

foreach($class_vars as $key => $vars){
	echo "$key : $vars\n";
}

echo "<br>";
echo '<pre>';

   /** Задача 8
  * Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4. Создайте объект этого класса. С помощью функции get_object_vars получите массив свойств созданного объекта. 
  */

 class TestEight
 {
   public $prop1;
   public $prop2;
   private $prop3;
   private $prop4;
 }  
 $testEight = new TestEight();
 var_dump(get_object_vars($testEight));

   /** Задача 9
  * Пусть у вас есть класс Test1 и нет класса Test2. Проверьте, что выведет функция class_exists для класса Test1 и для класса Test2. 
  */
class Test9
{

}
if (class_exists('Test9')) {
   echo 'object9';
   $test9 = new Test9;
}

if (class_exists('Test10')) {
   echo 'object10';
} else {
   echo 'does not exists';
}

   /** Задача 10
  * Пусть GET параметром в адресную строку передается название класса. Проверьте, существует ли такой класс. Выведите соответствующее сообщение на экран. 
  */
class Test11{}
$testClass = $_GET['Test11'];

 if (class_exists($testClass) == 'Test11') {
    echo 'exists';
 } else {
   echo 'Not';
 }

   /** Задача 11
  * Сделайте класс Test с методом method1 и без метода method2. Проверьте, что выведет функция method_exists для метода method1 и для метода method2. 
  */  
class Test12
{
   public function method1()
   {

   }
}
$test12 = new Test12();
var_dump(method_exists($test12, 'method1')); // true
var_dump(method_exists($test12, 'method2')); // false

   /** Задача 12
  * Пусть GET параметрами в адресную строку передаются название класса и его метод. Проверьте, существует ли такой класс. Если существует - проверьте существование переданного метода. Если и метод существует - создайте объект данного класса, вызовите указанный метод и выведите результат его работы на экран. 
  */
class TestTwolf
{
   public function getMethod()
   {
      echo "getMethod";
   }
}

$class = $_GET['TestTwolf'];
var_dump($class);
$methodOfClass = $_GET['getMethod'];
var_dump($methodOfClass);


if (class_exists($class) == 'TestTwolf') {
   if (method_exists($class, $methodOfClass) == 'getMethod') {
      $obj = new TestTwolf();
      echo $obj->getMethod();
   }
} else {
   echo 'False';
}


   /** Задача 13
  * Сделайте класс Test со свойством prop1 и без свойства prop2. Проверьте, что выведет функция property_exists для свойства prop1 и для свойства prop2. 
  */
class TestThirteen 
{
   public $prop1;
}
var_dump(property_exists('TestThirteen', 'prop1')); // true
var_dump(property_exists('TestThirteen', 'prop2')); // false

   /** Задача 14
  * Дан массив со свойствами класса. Дан также класс, имеющий часть из этих свойств. Переберите этот массив циклом, для каждого свойства проверьте, существует ли оно в классе и, если существует, выведите на экран значение этого свойства. 
  */

   /** Задача 15
  * Сделайте класс ChildClass наследующий от ParentClass. С помощью функции get_parent_class выведите на экран родителя класса ParentClass. 
  */  
   class ParentClass
   {
      public function __construct()
      {
         // code ...
      }
   }

      class ChildCLass extends ParentClass
      {
         public function __construct()
         {
            echo 'Son of' . get_parent_class($this);
         }
      }
      $obj = new ChildCLass();

      echo "<br>";

   /** Задача 16
  * Сделайте класс ChildClass наследующий от ParentClass, который в свою очередь наследует от GrandParentClass
  */ 

   /** Задача 17
  * С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком GrandParentClass. 
  */ 

      /** Задача 18
  * С помощью функции is_subclass_of проверьте, является ли класс ParentClass потомком GrandParentClass. 
  */ 

   /** Задача 19
  * С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком ParentClass. 
  */ 
      class GrandParent
   {

   }

   class isParent extends GrandParent
   {

   }

   class Child extends isParent
   {

   }
   
   $grandParent = new GrandParent();
   $isParent = new isParent();
   $child = new Child();

   if (is_subclass_of($child, 'GrandParent')) {
      echo 'child is son GrandParent';
   } else {
      echo 'child is not son GrandParent';
   }

   if (is_subclass_of($isParent, 'GrandParent')) {
      echo 'ParentClass son GrandParent' . "<br>";
   } else {
      echo 'ParentClass is not son GrandParent';
   }

   if (is_subclass_of($child, 'isParent')) {
      echo 'childClass son ParentClass';
   } else {
      echo 'childClass if son ParentClass';
   }

   /** Задача 20
  * Сделайте класс ChildClass наследующий от ParentClass. Создайте объект класса ChildClass, запишите его в переменную $obj. 
  */ 

        /** Задача 21
    * С помощью функции is_a проверьте, принадлежит ли объект $obj классу ChildClass. 
    */ 

     /** Задача 22
    * С помощью функции is_a проверьте, принадлежит ли объект $obj классу ParentClass. 
    */ 
class ParentClass1
{

}

   class ChildClass1 extends ParentClass1
   {

   }
   $childClass = new ChildClass1();
   $obj = $childClass;

   if (is_a($obj, 'ChildClass1')) {
      echo '$obj still childClass';
   } else {
      echo '$obj is not of childClass';
   }

   if (is_a($obj, 'ParentClass1')) {
      echo '$obj belongs class Parent';
   } else {
      echo '$obj is not belongs to childClass';   
   }
     /** Задача 23
     * Выведите на экран список всех объявленных классов. 
     */ 
     echo "<br>";
     echo "<pre>";
     var_dump(get_declared_classes());
?>