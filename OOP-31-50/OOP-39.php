<?php 
/**
 * Объявление конструктора в интерфейсе
 */ 

/** Задача 1
 * Сделайте интерфейс iCube, который будет описывать фигуру Куб. Пусть ваш интерфейс описывает конструктор, параметром принимающий сторону куба, а также методы для получения объема куба и площади поверхности.
 */ 

/** Задача 2
 * Сделайте класс Cube, реализующий интерфейс iCube.
 */

/** Задача 3
 * Сделайте интерфейс iUser, который будет описывать юзера. Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора. Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста.
 */

 /** Задача 4
 * делайте класс User, реализующий интерфейс iUser.
 */ 

interface iCube
{
	public function __construct($square, $volume);
	public function getSquare(); // get Square of Cube
	public function getVolume(); // get volume of Cub
}

interface iUser
{
	public function __construct($name, $age);
	public function getName();
	public function getAge();
}

class Cube implements iCube 
{
	private $square;
	private $volume;

	public function __construct($square, $volume)
	{
		$this->square = $square;
		$this->volume = $volume;
	}

	public function getSquare()
	{
		return pow($this->square, 2);
		
	}

	public function getVolume()
	{
		return pow($this->volume, 3);
	}
}
$cube = new Cube(10, 15);
echo $cube->getSquare();
echo $cube->getVolume();

class User implements iUser 
{
	private $name;
	private $age;

	public function __construct($name,$age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}
}
 // object of class User
$user = new User('user', 18);

echo $user->getName();
echo $user->getAge();

?>