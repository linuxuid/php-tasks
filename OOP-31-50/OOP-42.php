<?php 
/**
 * Несколько интерфейсов в ООП на PHP
 */ 

/** Задача 1
 * Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и iFigure, и iTetragon.
 */ 

/** Задача 2
 * Сделайте интерфейс iCircle с методами getRadius и getDiameter.
 */

 /** Задача 3
 * Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и iFigure, и iCircle.
 */ 


interface iTetragon 
{
	public function getA();
	public function getB();
	public function getC();
	public function getD();
}

	interface iFigure
	{
		public function getSquare();
		public function getPerimeter();
	}

		interface iCircle 
		{
			public function getRadius();
			public function getDiameter();
		}

	class Quadrate implements iFigure, iTetragon
	{
		private $a;
		
		public function __construct($a)
		{
			$this->a = $a;
		}
		
		public function getA()
		{
			return $this->a;
		}
		
		public function getB()
		{
			return $this->a;
		}
		
		public function getC()
		{
			return $this->a;
		}
		
		public function getD()
		{
			return $this->a;
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

			class Rectangle implements iTetragon, iFigure
	{
		private $a;
		private $b;
		
		public function __construct($a, $b)
		{
			$this->a = $a;
			$this->b = $b;
		}
		
		public function getA()
		{
			return $this->a;
		}
		
		public function getB()
		{
			return $this->a;
		}
		
		public function getC()
		{
			return $this->a;
		}
		
		public function getD()
		{
			return $this->a;
		}

		
		public function getSquare()
		{
			return $this->a * $this->b;
		}
		
		public function getPerimeter()
		{
			return 2 * ($this->a + $this->b);
		}
	}

	class Disk implements iFigure, iCircle
{
	const PI = 3.14;
	private $radius;
	private $diameter;

	public function getRadius()
	{
		return $this->$diameter/2;
	}
	
	public function getDiameter()
	{
		
	}

	public function getSquare()
	{
		return $this->$diameter * self::PI; 
	}

	public function getPerimeter()
	{
		return 2 * $this->$radius * self::PI;
	}
}
?>