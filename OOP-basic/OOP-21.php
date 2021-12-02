<?php
ini_set('error_reporting', 1);
error_reporting(E_ALL);

/**
 * Перезапись методов родителя в классе потомке
 */

/** Задача 1
 * Модифицируйте код класса User так, чтобы в методе
 * setName выполнялась проверка того,
 * что длина имени более 3-х символов.
 */

/** Задача 2
 * Добавьте в класс Student метод setName,
 * в котором будет выполняться проверка того,
 * что длина имени более 3-х символов и менее 10 символов. Пусть этот метод
 * использует метод setName своего родителя, чтобы выполнить часть проверки.
 */
class User
{
    protected $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (mb_strlen($name) > 3)
        {
            $this->name = $name;
        }

    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 18)
        {
            $this->age = $age;
        }

    }
}

class Student extends User
{
    private $course;

    public function setName($name)
    {
        if (mb_strlen($name) <= 10)
        {
            parent::setName($name); // parent method
        }
    }
    /**
     * @param $age
     * parent method of User class
     */
    public function setAge($age)
    {
        if ($age<=25)
        {
            parent::setAge($age); // parent method
        }
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}
$student = new Student();
$student->setName('Mike'); // Mike
echo $student->getName();

?>