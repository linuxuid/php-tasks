<?php
ini_set('error_reporting', 1);
error_reporting(E_ALL);

/**
 * Наследование классов
 */

/** Задача 1
 * Не подсматривая в мой код реализуйте такие же классы User, Employee.
 */

class User
{
    private $name;
    private $age;

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

/**
 * extends class User to Employee, Set and Get functions @name and @age
 */
class Employee extends User
{
    private $salary;

    /**
     * @param $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
$emp = new Employee();
$emp->setSalary(2600);
$emp->setName('John');
$emp->setAge(18);

echo $emp->getSalary();
echo $emp->getName();
echo $emp->getAge();

/** Задача 2
 * Не подсматривая в мой код реализуйте такой же класс
 * Student, наследующий от класса User.
 */
class Students extends User
{
    private $course; // course

    /**
     * @param $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}
$student = new Students();
$student->setName('Mike');
$student->setAge(18);
$student->setCourse(2);

echo $student->getName();
echo $student->getAge();
echo $student->getCourse();

/** Задача 3
 * Сделайте класс Programmer, который будет
 * наследовать от класса Employee.
 * Пусть новый класс имеет свойство langs,
 * в котором будет хранится массив языков,
 * которыми владеет программист.
 * Сделайте также геттер и сеттер для этого свойства.
 */
class Programmer extends Employee
{
    /**
     * @var array
     */
    private $langs = [];

    /**
     * @param $langs
     */
    public function setLang($langs)
    {
        $this->langs = $langs;
    }

    public function getLang()
    {
        foreach ($this->langs as $language){
            echo $language;
        }
    }
}
$lang = new Programmer();
$languages = ['php','Python', 'C++'];

$lang->setSalary(1500);
$lang->setLang($languages);

echo $lang->getLang();
echo $lang->getSalary();

/** Задача 4
 *  Сделайте класс Driver (водитель), который
 * будет наследовать от класса Employee.
 * Пусть новый класс добавляет следующие свойства:
 * водительский стаж, категория вождения (A, B, C, D),
 * а также геттеры и сеттеры к ним.
 */
class Driver extends Employee
{
    /**
     * @var array
     */
    private $drivingExp = [];

    /**
     * @param $drivingExp
     */
    public function setDriveExp($drivingExp)
    {
        $this->drivingExp = $drivingExp;
    }

    public function getDriveExp()
    {
        foreach ($this->drivingExp as $driveExp){
            echo $driveExp;
        }
    }
}
$driveExperience = new Driver();
$driveCateg = ['A','B','D','C'];

$driveExperience->setDriveExp($driveCateg);
$driveExperience->setSalary(1500);

echo $driveExperience->getSalary();
echo $driveExperience->getDriveExp();
?>