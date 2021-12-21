<?php
/**
 * Применение интерфейсов в ООП на PHP
 */ 
	interface Figure
	{
		public function getSquare();
		public function getPerimeter();
	}

		class Quadrate implements Figure
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

		class Rectangle implements Figure
	{
		private $a;
		private $b;
		
		public function __construct($a, $b)
		{
			$this->a = $a;
			$this->b = $b;
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

class FiguresCollection
{
	private $figures = []; // array if fugures

	public function add(Figure $figure)
	{
		$this->figures[] = $figure;
	}

	public function getTotalSquare()
	{
		$sum = 0;

		foreach($this->figures as $figure){
			$sum += $figure->getSquare();
		}
	}

	public function getTotalPerimeter()
	{
		$sum = 0;

		foreach($this->figures as $figure){
			$sum += $figure->getPerimeter();
		}
	}
}
$figuresCollection = new FiguresCollection;

// quadro
$figuresCollection->add(new Quadrate(2));
$figuresCollection->add(new Quadrate(3));

// rectangle
$figuresCollection->add(new Rectangle(2,3));
$figuresCollection->add(new Rectangle(3,4));


?>