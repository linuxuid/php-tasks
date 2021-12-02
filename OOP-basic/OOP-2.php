<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

/*
 * Работа со свойствами обьектов
 */

/* Задача 1
 *  Сделайте класс Employee (работник), в котором будут
 * следующие свойства - name (имя), age (возраст), salary (зарплата).
 */

/* Задача 2
 * Создайте объект класса Employee, затем установите его свойства
 * в следующие значения - имя 'john', возраст 25, зарплата 1000.
 */

/* Задача 3
 * Создайте второй объект класса Employee, установите его свойства
 * в следующие значения - имя 'eric', возраст 26, зарплата 2000.
 */

/* Задача 4
 * Выведите на экран сумму зарплат созданных юзеров.
 */

/* Задача 5
 * Выведите на экран сумму возрастов созданных юзеров.
 */

class Employee {
    public $name;
    public $age;
    public $salary;
}
$obj1 = new Employee();

$obj1->name = 'John';
$obj1->age = 25;
$obj1->salary = 1000;

$obj2 = new Employee();

$obj2->name = 'eric';
$obj2->age = 26;
$obj2->salary = 1000;

echo $obj1->salary + $obj2->salary;
echo "<br>";
echo $obj1->age+ $obj2->age;

?>