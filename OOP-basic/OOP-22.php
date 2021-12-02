<?php
ini_set('error_reporting',1);
error_reporting(E_ALL);

/**
 * Перезапись конструктора родителя в потомке
 */

/** Задача 1
 * Не подсматривая в мой код реализуйте такой же класс Student, наследующий от User.
 */

/** Задача 2
 * Сделайте класс User, в котором будут следующие свойства только
 * для чтения: name и surname. Начальные значения этих свойств
 * должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
 */

/** Задача 3
 * Модифицируйте предыдущую задачу так, чтобы третьим параметром в конструктор
 * передавалась дата рождения работника в формате год-месяц-день.
 * Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
 */

/** Задача 4
 * Модифицируйте предыдущую задачу так, чтобы был приватный метод
 * calculateAge, который параметром будет принимать дату рождения, а возвращать
 * возраст с учетом того, был ли уже день рождения в этом году, или нет.
 */

/** Задача 5
 * Модифицируйте предыдущую задачу так, чтобы метод calculateAge вызывался
 * в конструкторе объекта, рассчитывал возраст пользователя и
 * записывал его в приватное свойство age. Сделайте геттер для этого свойства.
 */

/** Задача 6
 * Сделайте класс Employee, который будет наследовать от класса User.
 * Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника.
 * Зарплата должна передаваться четвертым
 * параметром в конструктор объекта. Сделайте также геттер для этого свойства.
 */

class User
{
    protected $name;
    protected $surname;
    protected $birthday;
    protected $age;

    /**
     * @param $name
     * @param $surname
     * @param $birthday
     */
    public function __construct($name, $surname, $birthday)
    {
        $this->birthday = $birthday;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $this->calculateAge($birthday);

    }
    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function calculateAge($date)
    {
        $time = strtotime($date);
        if ($date('Y:m:d') == $date('Y:m:d', $time))
        {
            return 'was';
        } else {
            return $date;
        }
    }

}

class Employee extends User
{
    private $salary;

    public function __construct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
$obj1 = new Employee('Alyx','Mike','2021-12-10',2000);


