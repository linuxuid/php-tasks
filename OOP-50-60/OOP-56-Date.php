<?php 
/**
 * Класс Date в ООП на PHP
 */ 

/** Задача 1
 * Реализуйте описанный класс Date. Проверьте его работу.
 */ 
	class Date
	{
		private $date;

		public function __construct($date)
		{
			$this->date = $date;
		}
		
		public function getDay()
		{
			return $this->date;
		}
		
		public function getMonth($lang = null)
		{
			// возвращает месяц
			
			// переменная $lang может принимать значение ru 

			// если эта не пуста - пусть месяц будет словом 

		}
		
		public function getYear()
		{

		}
		
		public function getWeekDay($lang = null)
		{
			// возвращает день недели
			
			// переменная $lang может принимать значение ru 
			 
			// если эта не пуста - пусть день будет словом 

		}
		
		public function addDay($value)
		{
			// добавляет значение $value к дню
		}
		
		public function subDay($value)
		{
			// отнимает значение $value от дня
		}
		
		public function addMonth($value)
		{
			// добавляет значение $value к месяцу
		}
		
		public function subMonth($value)
		{
			// отнимает значение $value от месяца
		}
		
		public function addYear($value)
		{
			// добавляет значение $value к году
		}
		
		public function subYear($value)
		{
			// отнимает значение $value от года
		}
		
		public function format($format)
		{
			// выведет дату в указанном формате
			// формат пусть будет такой же, как в функции 

		}
		
		public function __toString()
		{
			// выведет дату в формате 'год-месяц-день'
		}
	}
$date = new Date('2025-12-31');
echo $date->getDay();
?>