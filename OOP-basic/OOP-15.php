<?php
/**
 * Переменные названия методов
 */

/** Задача 1
 * Пусть массив $methods будет ассоциативным с ключами method1 и method2:
<?php
$methods = ['method1' => 'getName',
'method2' => 'getAge'];
?>
 * Выведите имя и возраст пользователя с помощью этого массива.
 */

class User
{
    /**
     * @var $name
     */
    private $name;
    /**
     * @var $age
     */
    private $age;

    /**
     * @param $name
     * @param $age
     */
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}

/**
 * @object User
 */
$user = new User('Alex', 18);

/**
 * methods in array
 */
$methods = [
    'method1' => 'getName',
    'method2' => 'getAge'
];
echo $user->{$methods['method1']}() . ' : ' . $user->{$methods['method2']}();



?>

