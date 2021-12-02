<?php
/**
 * Начальные значения свойств в конструкторе
 */

/** Задача 1
 * Не подсматривая в мой код реализуйте такой же класс Student.
 */

/** Задача 2
 * Модифицируйте метод transferToNextCourse так,
 * чтобы при переводе на новый курс
 * выполнялась проверка того, что новый курс не будет больше 5.
 */

class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * course++
     */
    public function transferToNextCourse()
    {
        if ($this->course < 5):
            return $this->course++;
        endif;
    }
}

$student = new Student('Mike');
echo $student->getCourse();

$student->transferToNextCourse();
echo $student->getCourse();

$student->transferToNextCourse();
echo $student->getCourse();

$student->transferToNextCourse();
echo $student->getCourse();

$student->transferToNextCourse();
echo $student->getCourse();

?>