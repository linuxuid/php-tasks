<?php  
/**
 * Наследование от класса и реализация интерфейса
 */ 

/**
 * interface
 */ 
interface iProgrammer
{
	public function __construct($name, $salary);
	public function getName();
	public function getSalary();
	public function getLangs();
	public function addLang($lang);
}

class Employee
{
	private $name;
	private $salary;

	public function __construct($name, $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

/**
 * extends Employee and implements interface iProgrammer
 */ 
class Programmer extends Employee implements iProgrammer
{
	public function addLang($lang)
	{
		$this->lang = $lang;
	}

	public function getLangs()
	{
		return $this->lang;
	}
}
// object of class and set values
$programmer = new Programmer('Max', 3500);
$programmer->addLang('Python');

// get values
echo $programmer->getName();
echo $programmer->getSalary();
echo $programmer->getLangs();

$programmer->addLang('PHP');
echo $programmer->getLangs();
$programmer->addLang('C++');
echo $programmer->getLangs();
?>