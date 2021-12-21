<?php 
/**
 * Магический метод get
 */ 

/** Задача 1
 * Пусть дан вот такой класс User, свойства которого доступны только для чтения с помощью геттеров:
 */ 
class User
{
	private $name;
	private $age;

	public function __construct($name,$age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function __get($property)
	{
		return $this->$property;
	}
}
$user = new User('Max', 18);
echo $user->name;
echo $user->age;

/** Задача 2
 *  Сделайте класс Date с публичными свойствами year, month и day.
 С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.
 */ 
 class Date
 {
 	public $year;
 	public $month;
 	public $day;

 	public function __get($property)
 	{
 		if ($property = 'WeekDay') {
 			return $this->year . '' . $this->month . '' . $this->day;
 		}
 	}
 }
 $date = new Date();

 $date->year = date('Y:');
 $date->month = date('M');
 $date->day = date(':D');

 echo $date->WeekDay;
?>