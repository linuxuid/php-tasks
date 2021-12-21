<?php 
/**
 * Класс Interval в ООП на PHP
 */ 

class Date
	{

		public function __construct($date = null)
		{

			if (!$date) {
				$date = date('Y-m-d');
				echo $date;
			} else {
				echo $date;
			}
		}
	}
$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

class Interval
{

	public function __construct(Date $date1, Date $date2)
	{

	}
			public function toDays()
		{

		}
		
		public function toMonths()
		{
			// вернет разницу в месяцах
		}
		
		public function toYears()
		{
			// вернет разницу в годах
		}
}
$interval = new Interval($date1, $date2);

?>
