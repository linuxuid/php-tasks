<?php
/**
 *  Интерфейсы
 */ 

interface Figure
{
	public function getSquare();
	public function getPerimeter();
}

class Quadrate implements Figure
{
	private $a;

	public function __construct()
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

class Disk implements Figure
{
	const PI = 3.14;
	private $radius;
	private $diameter;

	public function getSquare()
	{
		return $diameter * self::PI; 
	}

	public function getPerimeter()
	{
		return 2 * $radius * self::PI;
	}
}

?>