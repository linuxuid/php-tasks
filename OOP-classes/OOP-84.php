<?php 
/**
 * Класс Validator
 */ 

	class Validator
	{
		public function isEmail($str)
		{
			if (filter_var($str, FILTER_VALIDATE_EMAIL)){
				return 'email true'. "<br>";
			} else {
				return 'email false'. "<br>";
			}
		
		}
		public function isDomain($str)
		{
			if (preg_match("/^([a-zd](-*[a-zd])*)(.([a-zd](-*[a-zd])*))*$/i", $str) //valid characters check
   				&& preg_match("/^.{1,253}$/", $str) //overall length check
   				&& preg_match("/^[^.]{1,63}(.[^.]{1,63})*$/", $str) ): //length of every label
			return 'true' . "<br>";
		else :
			return 'false'. "<br>";
		endif;
		}
		
		
		public function inRange($num, $from, $to)
		{
			$num = 0;
			if(($num >= $from) && ($num <= $to)){
				return 'range is correct';
			} else {
				return 'range is uncorrect';
			}
		}
		
		public function inLength($str, $from, $to)
		{
			$len = mb_strlen($str);
			if ($len < $from) {
				return "Field Name is too short, minimum is $from characters ($to max)";
			} else if($len > $to){
				return "Field Name is too long, maximum is $to characters ($from mix)";
			}
			return TRUE;

		}
	}
	/**
	 * email
	 */ 
	$email1 = 'testExample@gmail.com';
	$email2 = 'domµ*$ain.com';
	/**
	 * domain names
	 */ 
	$domainOne = 'domain.org';
	$domainTwo = 'domain.biz';
	$domainThree = 'domµ*$ain.com';
	$domainFour = 'domain.com/folder';
	$domainFive = 'domµ*$ain.com';
	/**
	 * string
	 */ 
	$str1 = 'hello!hello';

	/**
	 * object of class
	 */ 
	$val = new Validator();
	/**
	 * checking of Email
	 */ 
	echo $val->isEmail($email1); // true
	echo $val->isEmail($email2); // false
	/**
	 * checking of domain
	 */ 
	echo $val->isDomain($domainOne); // true
	echo $val->isDomain($domainTwo); // true
	echo $val->isDomain($domainThree); // false
	echo $val->isDomain($domainFour); // true
	echo $val->isDomain($domainFive); // false

	/**
	 * checking string
	 */ 
	echo $val->inLength($str1, 2, 6); // Field Name is too long, maximum is 6 characters (2 mix)


?>