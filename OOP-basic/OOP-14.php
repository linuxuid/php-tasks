<?php
/**
 * Переменные названия свойств объектов в PHP
 */

/** Задача 1
 * Сделайте класс City, в котором будут следующие свойства -
 * name, foundation (дата основания),
 * population (население). Создайте объект этого класса.
 */

/** Задача 2
 * Пусть дана переменная $props, в которой хранится массив
 * названий свойств класса City. Переберите этот
 * циклом foreach и выведите на экран значения соответствующих свойств.
 */

/** Задача 3
 * Скопируйте мой код класса User и массив $props. В моем примере
 * на экран выводится фамилия юзера.
 * Выведите еще и имя, и отчество.
 */

class City
{
    /**
     * @var name
     */
    public $name;
    /**
     * @var foundation
     */
    public $foundation;

    /**
     * @param $name
     * @param $foundation
     */
    public function __construct($name,$foundation)
    {
        $this->name = $name;
        $this->foundation = $foundation;
    }
}
$obj = new City('Max', 'Russia');

$props = ['name', 'foundation'];
foreach($props as $property)
{
    echo $obj->$property;
}

echo "<br>";
/**
 * User class
 */
class User
{
    /**
     * @var surname
     */
    public $surname;
    /**
     * @var name
     */
    public $name;
    /**
     * @var patronymic
     */
    public $patronymic;

    /**
     * @param $surname
     * @param $name
     * @param $patronymic
     */
    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }

}

/**
 * object of class
 */
$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]} . ' ';
echo $user->{$props[1]} . ' ';
echo $user->{$props[2]};

echo "<br>";
/**
 * Associate array
 */
$user1 = new User('Иранов', 'Максим', 'Максимович');
$props = [
    'props1' => 'surname',
    'props2' => 'name',
    'props3' => 'patronymic'
];
echo $user1->{$props['props1']} . ' ';
echo $user1->{$props['props2']} . ' ';
echo $user1->{$props['props3']};



?>