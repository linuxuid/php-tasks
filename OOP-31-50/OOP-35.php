<?php
/**
 * Абстрактные классы PHP
 * Example
 */

/** Задача 1
 * Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный класс User, а также классы Employee и Student, наследующие от него.
 */ 

/** Задача 2
 * Добавьте в ваш класс User такой же абстрактный метод increaseRevenue. Напишите реализацию этого метода в классах Employee и Student.
 */

/** Задача 3
 * Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату). Напишите реализацию этого метода в классах Employee и Student.
 */
abstract class User
{
	private $name;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * abstract method without body increaseRevenue
	 */ 
	abstract public function increaseRevenue($value);

	/**
	 * abstract method without body decreaseRevenue
	 */ 
	abstract public function decreaseRevenue($value);
}

class Employee extends User 
{
	private $salary;

	public function getSalary()
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	public function increaseRevenue($value)
	{
		$this->salary = $this->salary + $value;
	}

	public function decreaseRevenue($value)
	{
		$this->salary = $this->salary - $value;
	}
}

class Student extends User
{
	private $scholarship;

	public function getScholarship()
	{
		return $this->scholarship;
	}

	public function setScholarship($scholarship)
	{
		$this->scholarship = $scholarship;
	}

	public function increaseRevenue($value)
	{
		$this->scholarship = $this->scholarship + $value;
	}

	public function decreaseRevenue($value)
	{
		$this->scholarship = $this->scholarship - $value;
	}
}

$emp = new Employee();
// set
$emp->setName('John');
$emp->setSalary(2500);
$emp->increaseRevenue(100);
$emp->decreaseRevenue(100);

// get 
echo $emp->getName();
echo $emp->getSalary();

/** Задача 4
 * Сделайте аналогичный класс Rectangle (прямоугольник), у которого будет два приватных свойства: $a для ширины и $b для длины. Данный класс также должен наследовать от класса Figure и реализовывать его методы.
 */

 /** Задача 5
 *  Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра.
 */ 

abstract class Figure
{
	abstract public function getSquare();
	abstract public function getPerimeter();

	public function getRatio()
	{
		return $this->getSquare() / $this->getPerimeter();
	}

	public function getSquarePerimeterSum()
	{
		return $this->getSquare() + $this->getPerimeter();
	}
}

class Quadrate extends Figure
{
	private $a;

	public function __construct($a)
	{
		$this->a = $a;
	}

	public function getSquare()
	{
		return $this->a * $this->a;
	}

	public function getPerimeter()
	{
		return 4 * $this->a;
	}
}
$quadrate = new Quadrate(2);
echo $quadrate->getSquare(); // 4
echo $quadrate->getPerimeter(); // 8
echo $quadrate->getSquarePerimeterSum(); // 12

/**
 * Rectangle task
 */ 
class Rectangle
{
	private $a;
	private $b;

	public function getSquare()
	{
		// code...
	}

	public function getPerimeter()
	{
		// code...
	}
}

?>