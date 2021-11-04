<?php
include 'connect_db.php';
/*
 * Редактирование записи в БД на PHP
 */

/* Задача 1
 * Реализуйте страницу edit.php для редактирования юзера.
 */

$id = $_GET['id'];


$query = "SELECT * FROM users WHERE id=$id";


$res = mysqli_query($link, $query) or die (mysqli_error($link));

$user = mysqli_fetch_assoc($res);
?>

<form action="190-save.php?id= <?= $_GET['id'] ?>" method="POST">
    <input name="name" value="<?= $user['name'] ?>">
    <input name="age" value="<?= $user['age'] ?>">
    <input name="salary" value="<?= $user['salary'] ?>">
    <input type="submit"></label>
</form>

<?php

/* Задача 2
 * Реализуйте страницу save.php для сохранения результата редактирования.
 */

/*
 * Реализация на странице save.php
 */

/* Задача 3
 * На странице index.php выведите на экран список юзеров так, чтобы
 * для каждого юзера была ссылка для его редактирования:
<ul>
	<li>user1 <a href="?edit=1">edit</a></li>
	<li>user2 <a href="?edit=2">edit</a></li>
	<li>user3 <a href="?edit=3">edit</a></li>
</ul>
 */

/* Задача 4
 * Реализуйте обработку формы на странице edit.php.
 */

/*
 * Проверка отправки формы
 */
if (isset($_GET['id'])):
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    /*
     * query
     */

    $query = "UPDATE users SET
    name = '$name', age='$age', salary='$salary'
    WHERE id=$id
    ";

    mysqli_query($link,$query) or die(mysqli_error($link));

    echo 'user succesful changed';
else :
    echo 'failed';
endif;

/*
 * Сама форма
 */
$id = $_GET['id'];


$query = "SELECT * FROM users WHERE id=$id";


$res = mysqli_query($link, $query) or die (mysqli_error($link));

$user = mysqli_fetch_assoc($res);
?>

<form action="190-edit.php?id= <?= $_GET['id'] ?>" method="POST">
    <input name="name" value="<?= $user['name'] ?>">
    <input name="age" value="<?= $user['age'] ?>">
    <input name="salary" value="<?= $user['salary'] ?>">
    <input type="submit"></label>
</form>

?>
