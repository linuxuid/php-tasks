<?php
/**
 * Модификатор доступа protected в ООП на PHP
 */

/**
 *
 */

class User
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Student extends User
{
    private $course;

    public function addOneYear()
    {
        $this->age++;
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

$student->setName('john');
$student->setCourse(3);
$student->setAge(25);

$student->addOneYear();
	echo $student->getAge();
?>