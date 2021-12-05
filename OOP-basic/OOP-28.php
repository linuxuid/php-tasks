<?php
/**
 * Контроль типов при работе с объектами
 */

use Employees as GlobalEmployees;

/** Задача 1
  * Сделайте класс Post (должность), в котором 
  * будут следующие свойства, 
  * доступные только для чтения: name и salary. 
  */

  /** Задача 2
   * Создайте несколько объектов класса 
   * Post: программист, менеджер водитель
   */

   /** Задача 3
    * Сделайте класс Employee, в котором будут следующие 
    * свойства: name и surname. Пусть начальные
    * значения этих свойств будут передаваться параметром в конструктор. 
    */

    /** Задача 4
     * Сделайте геттеры и сеттеры для свойств name и surname. 
     */

     /** Задача 5
      * Пусть теперь третьим параметром конструктора будет передаваться 
      * должность работника, представляющая 
      * собой объект класса Post. Укажите тип этого параметра в явном виде. 
      */

      /** Задача 6
       * Сделайте так, чтобы должность работника (то есть 
       * переданный объект с должностью) записывалась в свойство post. 
       */

       /** Задача 7
        * Создайте объект класса Employee с должностью программист. 
        * При его создании 
        * используйте один из объектов класса Post, созданный нами ранее. 
        */

        /** Задача 8
         * Выведите на экран имя, фамилию, 
         * должность и зарплату созданного работника. 
         */

         /** Задача 9
          * Реализуйте в классе Employee метод changePost, который будет изменять должность 
          * работника на другую. Метод должен принимать параметром объект класса 
          * Post. Укажите в методе тип принимаемого параметра в явном виде
          */
           class Employee
           {
               private $name;
               private $salary;

               public function __construct($name, $salary)
               {
                    $this->name = $name;
                    $this->salary = $salary;   
               }

               public function getName()
               {
                    return $this->name;
               }

               public function getSalary()
               {
                    return $this->salary;
               }
           }

           class EmployeesCollection 
           {
                private $employees = [];
                
                // add employee
                public function add(Employee $employee)
                {
                    $this->employees[] = $employee;
                }

                public function getTotalSalary()
                {
                    $sum = 0;
                    foreach($this->employees as $employee){
                        $sum += $employee->getSalary();
                    }
                    return $sum;
                }
           }
           $object = new EmployeesCollection();

           /**
            * Выполнение задач
            */
           class Post 
           {
               private $name;
               private $salary;

               public function __construct($name, $salary)
               {
                    $this->name = $name;
                    $this->salary = $salary;
               }

               public function getNameSalary()
               {
                   return $this->name . ' ' . $this->salary;
               }

           }
           $prog = new Post('programmer', 2500);
           $driver = new Post('driver', 3500);

           class Employees 
           {
               public $name;
               public $surname;
               public $post;
               public $posts= [];

               public function __construct($name, $surname, Post $post)
               {
                   $this->name = $name;
                   $this->surname = $surname;
                   $this->post = $post;
               }

               public function getName()
               {
                   return $this->name;
               }

               public function getSurname()
               {
                   return $this->surname;
               }

               /**
                * change position
                */
                public function ChangePost(Post $post)
                {
                    $this->posts[] = $post;
                }

           }
           $obj1 = new Employees('Alex', 'Mihailo', $prog);
           echo $obj1->getName() . ' ';
           echo $obj1->getSurname() . ' ';
           echo $prog->getNameSalary() . ' ';

           $obj1->ChangePost($driver);
           echo $driver->getNameSalary();

           
?>  