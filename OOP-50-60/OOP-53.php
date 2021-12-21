<?php 
/**
 * Функции для работы трейтами в ООП на PHP
 */

 /**
 * Функция trait_exists
 */
 trait Trait1
 {

 }
 if (trait_exists('Trait1')) {
 	
 	echo'exists';

 } else if(!trait_exists('Trait2'))
 	{
 		echo ' Trait2 is doesn\'t exists ';
 	}

 /**
 * get_declared_traits
 */ 
 var_dump(get_declared_traits());
?>