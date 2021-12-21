<?php 
/**
 * Класс CookieShell
 */ 
class CookieShell
{
	private $name = false;
	private $value = "";
	private $time;

	public function create()
	{
		return setcookie($this->name, $this->getValue(), $this->getTime());
	}

	public function get()
	{
		return $_COOKIE[$this->getName()];
	}

	public function del($name)
	{
		return setcookie($this->name, '', time() - 3600);
	}

	public function exists()
	{
		if (isset($_COOKIE[$this->getName()])) {
			echo 'exists';
		} else {
			echo 'cookie is not set';
		}
	}

	public function setName($id)
	{
		return $this->name = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setTime($time)
	{
		/**
		 * create time
		 */ 
		$date = new DateTime();
		/**
		 * modify it
		 */ 
		$date->modify($time);
		// timestamp
		$this->time = $date->getTimestamp();
	}

	public function getTime()
	{
		return $this->time;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}
}

$csh = new CookieShell();
$csh->setName('test');
$csh->setValue('testing cookie');
$csh->setTime('+1 hour');
$csh->create();

/**
 * delete cookie 
 */
echo $csh->del('test');

/**
 * checkinh if Cookie exists
 */ 
echo $csh->exists();


?>