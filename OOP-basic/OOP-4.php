<?php
/*
 *
 */

/* Задача 1
 * Сделайте класс Employee, в котором будут
 * следующие свойства - name, age, salary.
 */

/* Задача 2
 * Сделайте в классе Employee метод getName,
 * который будет возвращать имя работника.
 */

/* Задача 3
 * Сделайте в классе Employee метод getAge,
 * который будет возвращать возраст работника.
 */

/* Задача 4
 * Сделайте в классе Employee метод getSalary, который
 * будет возвращать зарплату работника.
 */

/* Задача 5
 * Сделайте в классе Employee метод checkAge,
 * который будет проверять то, что работнику больше 18 лет
 * и возвращать true, если это так, и false, если это не так.
 */

/* Задача 6
 * Создайте два объекта класса Employee,
 * запишите в их свойства какие-либо значения. С
 * помощью метода getSalary найдите сумму зарплат созданных работников.
 */

class Employee {
    public $name;
    public $age;
    public $salary;

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function checkAge(){
        if ($this->age > 18) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

$obj1 = new Employee();
$obj2 = new Employee();

$obj1->name = 'John';
$obj1->age = 25;
$obj1->salary = 1500;

$obj2->name = 'Igor';
$obj2->age = 32;
$obj2->salary = 5000;

echo $obj1->getSalary() + $obj2->getSalary();

echo "<br>";
/* Задача 7
 * Сделайте класс User, в котором будут следующие свойства - name и age
 */

/* Задача 8
 *  Сделайте метод setAge, который параметром
 * будет принимать новый возраст пользователя.
 */

/* Задача 9
 * Создайте объект класса User с именем 'john' и возрастом 25.
 * С помощью метода setAge
 * поменяйте возраст на 30. Выведите новое значение возраста на экран.
 */

/* Задача 10
 * Модифицируйте метод setAge так, чтобы он вначале проверял,
 * что переданный возраст больше или равен 18. Если это так - пусть метод
 * меняет возраст пользователя, а если не так - то ничего не делает.
 */

class User {
    public $name;
    public $age;

    public function setAge($age){
        if ($this->age >= 18) {
            $this->age = $age;
        }
    }
}
$user = new User();
$user->name = 'John';
$user->age = 17;
$user->setAge(22);

echo $user->age;

/* Задача 11
 * Сделайте класс Employee, в котором будут следующие
 * свойства работника - name, salary. Сделайте метод
 * doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
 */



class EmployeeTwo {
    public $name;
    public $salary;

    public function doubleSalary($salary) {
        return $this->salary = pow($salary, 2);
    }
}

$emplo = new EmployeeTwo();
echo $emplo->doubleSalary(15);

/* Задача 12
 * Сделайте класс Rectangle, в котором в свойствах
 * будут записаны ширина и высота прямоугольника.
 */

/*  Задача 13
 * В классе Rectangle сделайте метод getSquare, который будет
 * возвращать площадь этого прямоугольника.
 */

/* Задача 14
 * В классе Rectangle сделайте метод getPerimeter,
 * который будет возвращать периметр этого прямоугольника.
 */

class Rectangle {
    public $width;
    public $height;

    public function getSquare($width, $height) {
        $this->width = $width;
        $this->height = $height;
        return $width * $height;
    }

    public function getPerimeter($width, $height){
        $this->width = $width;
        $this->height = $height;
        return $width + $height;
    }
}

$rec = new Rectangle();
echo $rec->getSquare(4,4); // 16

$rec2 = new Rectangle();
echo $rec2->getPerimeter(4,4); // 8
?>