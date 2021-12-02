<?php
/**
 * Передача объектов по ссылке
 */

/** Задача 1
 * Сделайте класс Product, в котором будут следующие свойства: name, price.
 */

/** Задача 2
 * Создайте объект класса Product, запишите его в переменную $product1.
 */

/** Задача 3
 * Присвойте значение переменной $product1 в переменную $product2.
 * Проверьте то, что обе переменные ссылаются на один и тот же объект.
 */

class Product
{
    public $name;
    public $price;
}
$product = new Product();
$product1 = $product;
$product2 = $product1;
var_dump($product1); // object(Product)#1 (2) { ["name"]=> NULL ["price"]=> NULL }
var_dump($product2); // object(Product)#1 (2) { ["name"]=> NULL ["price"]=> NULL }
?>