<?php
include "connect_db.php";

/*
 * Добавление новой записи в БД на PHP
 */

/* Задача 1
 * На странице new.php реализуйте форму для добавления нового юзера.
 */

if (!empty($_POST)) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    /*
     * Если форма была отправлена - будет отправлен запрос
     */
    $query = "INSERT INTO users SET
    name='$name', age='$age', salary='$salary'
    ";
    mysqli_query($link,$query) or die (mysqli_error($link));
}


?>

<form action="" method="POST">
    <label>name : <input name="name"></label>
    <label>age : <input name="age"></label>
    <label>salary : <input name="salary"></label>
    <input type="submit">
</form>


<?php
/* Задача 2
 * Модифицируйте предыдущую задачу так,
 * чтобы после отправки формы значения из нее не удалялись.
 */

?>

<form action="" method="POST">
    <label>name : <input name="name" value="<?php echo $_POST['name']?>"></label>
    <label>age : <input name="age" value="<?php echo $_POST['age']?>"></label>
    <label>salary : <input name="salary" value="<?php echo $_POST['salary']?>"></label>
    <input type="submit">
</form>