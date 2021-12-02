<?php
/*
 * Обращение к методам класса через $this
 */

/* Задача 1
 * Не подсматривая в мой код создайте такой же класс User с такими же методами.
 */

/* Задача 2
 * Создайте объект этого класса User проверьте работу методов setAge и addAge.
 */

/* Задача 3
 * Добавьте также метод subAge, который будет выполнять уменьшение
 * текущего возраста на переданное количество лет.
 */

class User
{
    public $name;
    public $age;

    public function isAgeCorrect($age)
    {
        if ($age >= 18 and $age <= 60) {
            return true;
        } else {
            return false;
        }
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function addAge($years)
    {
        $newAge = $this->age + $years;

        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
			}
    }

    public function subAge($age){
        $lessAge = $this->age - $age;

        if ($this->isAgeCorrect($lessAge)){
            $this->age = $lessAge;
        }
    }
}

$user = new User();
$user->setAge(30);
echo $user->age;

$user->setAge(10);
echo $user->age;

$user->subAge(5);
echo $user->age;
?>