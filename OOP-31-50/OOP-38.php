<?php
/**
 * Параметры в методах интерфейсов в ООП на PHP
 */ 

/** Задача 1
 * реализовать интерфейс iUser
 */ 
interface iUser
{
	public function setName($name); // set name
	public function getName(); // get name
	public function setAge($age); // set age
	public function getAge(); // get age
}

class User implements iUser
{
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getAge()
	{
		return $this->age;
	}
}
/**
 * object of class User
 */ 
$user = new User();

// set values
$user->setName('Igor');
$user->setAge(18);

// get values
echo $user->getName();
echo $user->getAge();



?>