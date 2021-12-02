<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
 * Работа с геттерами и сеттерами в ООП на PHP
 */

/* Задача 1
 * Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
 */

/* Задача 2
 * Сделайте геттеры и сеттеры для всех свойств класса Employee.
 */

/* Задача 3
 * Дополните класс Employee приватным методом isAgeCorrect,
 * который будет проверять возраст на корректность
 * (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge
 * перед установкой нового возраста (если возраст не корректный - он не должен меняться).
 */

/* Задача 4
 *  Пусть зарплата наших работников хранится в долларах.
 * Сделайте так, чтобы геттер getSalary добавлял в
 * конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата
 * будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.
 */

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {

    }

    // if checking is correct we set age
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age))
        {
            $this->age = $age;
        }
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {

    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary . '$';
    }

    // method check age user
    public function isAgeCorrect($age)
    {
        return $age >= 1 and $age <= 100;
    }
}
$employee = new Employee();
$employee->setSalary(3000);
echo $employee->getSalary();

?>
