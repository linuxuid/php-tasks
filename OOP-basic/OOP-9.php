<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
 * Свойства только для чтения в ООП на PHP
 */

/* Задача 1
 * Сделайте класс Employee, в котором будут следующие
 * свойства: name, surname и salary.
 */

/* Задача 2
 * Сделайте так, чтобы свойства name и surname были доступны
 * только для чтения, а свойство salary - и для чтения, и для записи.
 */

class Employee
{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
$employee = new Employee('John', 'Kry');
echo $employee->getName();
echo $employee->getSurname();

$employee->setSalary(4000);
echo $employee->getSalary();


?>