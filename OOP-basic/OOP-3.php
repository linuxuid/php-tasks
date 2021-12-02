<?php
/*
 * Работа с методами объектов
 */

/* Задача 1
 * Не подсматривая в мой код реализуйте такой же класс User с методом show().
 */

/* Задача 2
 * Не подсматривая в мой код реализуйте такой же класс User с методом show().
 */


class User {
    public $name;
    public $age;

    public function show($str){
        return $str . '!!!';
    }
}
$obj1 = new User();

$obj1->name = 'John';
$obj1->age = 25;

echo $obj1->show('Fuck you');
?>