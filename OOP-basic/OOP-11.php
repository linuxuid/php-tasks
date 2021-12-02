<?php
/*
 * Хранение объектов в массивах в ООП на PHP
 */

/* Задача 1
 * Сделайте класс City, в котором будут следующие
 * свойства: name, population (количество населения).
 */

/* Задача 2
 * Создайте 5 объектов класса City, заполните их данными и запишите в массив.
 */

/* Задача 3
 * Переберите созданный вами массив с городами циклом
 * и выведите города и их население на экран.
 */

class City
{
    public $name;
    public $population;

    /**
     * construct
     */
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}
$object = [
    new City('Mike', 'USA'),
    new City('Alex', 'Russia'),
    new City('Igor', 'Russia'),
    new City('Max', 'Canada'),
    new City('Kelvin', 'North America')
];

/**
 * output with foreach;
 */
foreach ($object as $city):
    echo $city->name . ' : ' . $city->population . "<br>";
endforeach;


?>

