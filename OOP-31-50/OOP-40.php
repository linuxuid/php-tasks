<?php 
/**
 * Наследование интерфейсов друг от друга
 */ 

/** Задача 1
 * Сделайте интерфейс iUser с методами getName, setName, getAge, setAge. 
 */

 /** Задача 2
 * Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.
 */

 /** Задача 3
 * Сделайте класс Employee, реализующий интерфейс iEmployee.
 */

interface iUser 
{
    public function getName();
    public function setName($value);
    public function getAge();
    public function setAge($value);
}

interface iEmployee extends iUser
{
    public function getSalary();
    public function setSalary($value);
}

class Employee implements iEmployee 
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {   
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
$emp = new Employee();

// set values
$emp->setName('Sasha');
$emp->setAge(18);
$emp->setSalary(3500);

// get values
echo  'name : ' . $emp->getName() . "<br>";
echo  'age : ' . $emp->getAge() . "<br>";
echo  'salary : ' . $emp->getSalary();
?>