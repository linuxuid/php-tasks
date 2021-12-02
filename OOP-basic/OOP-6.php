<?php
/*
 * Модификаторы доступа public и private в PHP
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

/* Задача 1
 * Не подсматривая в мой код внесите такие же правки в класс User.
 */

/* Задача 2
 * Попробуйте вызвать метод isAgeCorrect снаружи класса.
 * Убедитесь, что это будет вызывать ошибку.
 */

class User {
  public $name;
  public $age;

  public function setAge($age)
  {
      if ($this->isAgeCorrect($age)){
          $this->age = $age;
      }
  }

  public function addAge($years)
  {
      $newAge = $this->age + $years;

    if ($this->isAgeCorrect($newAge)){
        $this->age = $newAge;
    }
  }

  private function isAgeCorrect($age)
  {
      return $age >= 18 and $age <= 60;
  }
}

$user = new User();
$user->setAge(30);
echo $user->age;

$user->addAge(15);
echo $user->age;

echo "<br>";

/* Задача 3
 * Сделайте класс Student со свойствами $name и
 * $course (курс студента, от 1-го до 5-го).
 */

/* Задача 4
 * В классе Student сделайте public метод transferToNextCourse,
 * который будет переводить студента на следующий курс.
 */

/* Задача 5
 * Выполните в методе transferToNextCourse
 * проверку на то, что следующий курс не больше 5.
 */

/* Задача 6
 *  Вынесите проверку курса в отдельный private метод isCourseCorrect.
 */

class Student
{
    public $name;
    public $course;

    public function setCourse($course)
    {
        if ($this->isCourseCorrect($course)){
            $this->course = $course;
        }
    }

    public function transferToNextCourse($nextCourse)
    {
        $upCourse = $this->course + $nextCourse;
        if ($this->isCourseCorrect($upCourse)){
            $this->course = $upCourse;
        }
    }

    private function isCourseCorrect($course)
    {
        return $course >= 1 and $course <= 5;
    }
}

// second course
$student = new Student();
$student->setCourse(2);

// up to the next course
$student->transferToNextCourse(1);

// up to the next course
$student->transferToNextCourse(1);
echo $student->course;

?>