<?php 
/**
 * Функции для работы с интерфейсами в ООП на PHP
 */ 

/**
 * Функция interface_exists
 */
interface iTest1
{

}

var_dump(interface_exists('iTest1')); // true
var_dump(interface_exists('iTest2')); // false

 /**
 * Функция get_declared_interfaces
 */ 
 echo "<pre>";
 var_dump(get_declared_interfaces());
?>