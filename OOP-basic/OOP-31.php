<?php

/**
 * Объект со статическими свойствами и методами
 */

 /** Задача 1
  * Не подсматривая в мой код реализуйте такой же класс User, 
  * подсчитывающий количество своих объектов. 
  */

  /** Задача 2
   *  Самостоятельно переделайте код вашего класса User 
   * в соответствии с теоретической частью урока. 
   */
    class User
    {
        public static $count = 0;
        public $name;
        
        public function __construct($name)
        {
            $this->name = $name;
            
            self::$count++;
        }
    }
    $user1 = new User('user1'); 
    echo User::$count; 
    
    $user2 = new User('user2');  
    echo User::$count; 
?>