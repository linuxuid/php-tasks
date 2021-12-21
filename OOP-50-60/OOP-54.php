<?php
/**
 * Магический метод toString в ООП на PHP
 */ 

/** Задача 1
 * Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic. Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя.
 */ 
class User
{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    /**
     * we use magic method to convert to string
     */
     public function __toString()
     {
        return $this->name . $this->surname . $this->patronymic;
     } 

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPatronymic()
    {
        return $this->patronymic;
    }
}
$user = new User('Alexey','Lysov','Anatolevich');
echo $user;

/** Задача 2
 * Не подсматривая в мой код, реализуйте такой же класс Arr.
 */ 
class Arr
{
    private $numbers = [];

    public function add($num)
    {
        $this->numbers[] = $num;
        return $this; 
    }

    public function __toString()
    {
        return (string) array_sum($this->numbers);
    }
}
$arr = new Arr;
echo $arr->add(2)->add(3)->add(4);
?>