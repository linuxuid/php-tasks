<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/*
 * Конструктор объекта в ООП на PHP
 */

/* Задача 1
 * Сделайте класс Employee, в котором будут следующие публичные
 * свойства - name, age, salary. Сделайте так,
 * чтобы эти свойства заполнялись в конструкторе при создании объекта.
 */

/* Задача 2
 * Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000.
 */

/* Задача 3
 * Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.
 */

/* Задача 4
 * Выведите на экран сумму зарплат созданных вами юзеров.
 */

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->age = $age;
        $this->name = $name;
        $this->salary = $salary;
    }
}

$eric = new Employee('eric',25,1000);
$kyle = new Employee('Kyle', 30, 2000);
echo $eric->salary + $kyle->salary; // 3000



?>
