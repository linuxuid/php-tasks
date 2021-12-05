<?php
/**
 * Определение принадлежности объекта к классу
 */

 /** Задача 1
  *  Сделайте класс Employee с публичными свойствами 
  *    name (имя) и salary (зарплата). 
  */

  /** Задача 2
  *  Сделайте класс Student с публичными 
  *  свойствами name (имя) и scholarship (стипендия). 
  */

/** Задача 3
 * Создайте по 3 объекта каждого 
 * класса и в произвольном порядке запишите их в массив $arr. 
 */

 /** Задача 4
  * Переберите циклом массив $arr и выведите 
  * на экран столбец имен всех работников. 
 */

 /** Задача 5
  * Аналогичным образом выведите на экран столбец имен всех студентов. 
 */

 /** Задача 6
  * Переберите циклом массив $arr и с его помощью найдите сумму 
  * зарплат работников и сумму 
  * стипендий студентов. После цикла выведите эти два числа на экран. 
 */

 class Employee 
 {
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
 }

 class Student 
 {
     public $name;
     public $scholarship;

     public function __construct($name, $scholarship)
     {
        $this->name = $name;
        $this->scholarship = $scholarship;
     }
 }
$arr = [
    new Employee('Mike', 2000), 
    new Employee('Kyle', 1500), 
    new Employee('Max', 3000)
];

$sum = 0;
foreach($arr as $obj){
    echo $obj->name . ' ' . $obj->salary . "<br>";
    
    $sum += $obj->salary; // sum of salaries
}
echo 'sum : ' . $sum;

echo "<br>" . "<br>";

$arr = [
    new Student('Alex', 1500), 
    new Student('Gleb', 5000),
    new Student('Maxim', 4500)
];

$sum = 0;
foreach($arr as $student){
    echo $student->name . ' ' . $student->scholarship . "<br>";

    $sum += $student->scholarship; // sum of scholarship
}
echo 'sum : ' . $sum;

echo "<br>" . "<br>";
/** Задача 7
 * Сделайте класс User с публичным свойствами name и surname. 
 */

 /** Задача 8
 * Сделайте класс Employee, который будет наследовать 
 * от класса User и добавлять свойство salary. 
 */

 /** Задача 9
 * Сделайте класс City с публичными свойствами name и population
 */

 /** Задача 10
 * Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта 
 * класса City, и в произвольном порядке запишите их в массив $arr. 
 */

 /** Задача 11
 * Переберите циклом массив $arr и выведите на экран столбец свойств name тех 
 * объектов, которые принадлежат классу User или потомку этого класса. 
 */

 /** Задача 12
 * Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, 
 * которые не принадлежат классу User или потомку этого класса.
 */

 /** Задача 13
  * Переберите циклом массив $arr и выведите на экран столбец 
  * свойств name тех объектов, которые принадлежат именно 
  * классу User, то есть не классу City и не классу Employee. 
  */

  /** Задача 14
   * Скопируйте мой код классов Employee и Student и самостоятельно 
   * не подсматривая в мой код реализуйте такой же класс UsersCollection. 
   */

class Employees
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

class Students 
{
    private $name;
    private $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}

class UsersCollection 
{
    private $employees = [];
    private $students = [];

    public function add($user)
    {
        // Employees
        if($user instanceof Employees){
            $this->employees[] = $user;
        }
        // students
        if($user instanceof Students){
            $this->students[] = $user;
        }
    }

    // sum of wage
    public function getTotalSalary()
    {
        $sum = 0;
			
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary();
        }
        
        return $sum;
    }

    // sum of scholarship
    public function getTotalScholarship()
    {
        $sum = 0;
        foreach($this->students as $students) {
            $sum += $students->getScholarship();
        }
        return $sum;
    }

    // common wage of students and employees
    public function getTotalPayment()
    {
        return $this->getTotalScholarship() + $this->getTotalSalary();
    }
}

$usersCollection = new UsersCollection;

$usersCollection->add(new Student('kyle', 100));
$usersCollection->add(new Student('luis', 200));

$usersCollection->add(new Employee('john', 300));
$usersCollection->add(new Employee('eric', 400));

echo $usersCollection->getTotalScholarship();

echo $usersCollection->getTotalSalary();

echo $usersCollection->getTotalPayment();