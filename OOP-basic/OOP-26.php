<?php
/**
 * Сравнение объектов в ООП на PHP
 */

/** Задача 1
 * Сделайте функцию compare, которая параметром будет
 * принимать два объекта и возвращать true,
 * если они имеют одинаковые свойства и значения являются
 * экземплярами одного и того же класса, и false, если это не так.
 */

/** Задача 2
 * Сделайте функцию compare, которая параметром будет принимать два объекта и
 * возвращать true, если переданные переменные
 * ссылаются на один и тот же объект, и false, если на разные.
 */

/** Задача 3
Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.

Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.

Функция должна возвращать 0, если объекты разные,

 * но одного и того же класса и с теми же свойствами и их значениями.

Функция должна возвращать -1 в противном случае.
 */

function bool2str($bool)
{
    return (string) $bool;
}

function compare($obj1, $obj2){
    echo 'obj1 == obj2 : ' . bool2str($obj1 == $obj2) . "\n";
    echo 'obj1 != obj2 : ' . bool2str($obj1 != $obj2) . "\n";
}

function isCompare($obj1, $obj2){
    echo 'obj1 === obj2 : ' . bool2str($obj1 === $obj2) . "\n";
    echo 'obj1 !== obj2 : ' . bool2str($obj1 !== $obj2) . "\n";
}
class Flag
{
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

class OtherFlag
{
    public $flag;

    function __construct($flag = true) {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

isCompare($p,$q);
compare($r,$p);

/**
 * Применение
 */
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

class EmployeeCollection
{
    private $employees = [];

    public function add($newEmployee)
    {
        if (!in_array($newEmployee, $this->employees, FALSE)) {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }
}

$emp = new EmployeeCollection();

$emp->add(new Employee('Mike', 100));
$emp->add(new Employee('Mike', 100));

echo "<pre>";
var_dump($emp->get());