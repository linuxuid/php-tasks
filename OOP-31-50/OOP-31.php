<?php
/**
 * Объект со статическими свойствами и методами
 */
 
/** Задача 1
 * Не подсматривая в мой код реализуйте такой же класс User, подсчитывающий количество своих объектов.  
 */ 

/** Задача 2
 * Самостоятельно переделайте код вашего класса User в соответствии с теоретической частью урока. 
 */ 

class User
{
	private static $count = 0;
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
		self::$count++; // increase counter
	}

	public function getCount()
	{
		return self::$count;
	}
}
$user = new User('user1');
echo $user->getCount();

?>
