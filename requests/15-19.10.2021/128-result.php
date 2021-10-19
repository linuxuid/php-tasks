<?php
/*
 * Получение данных из формы 1-й задачи
 */
echo "sum : " . $_GET['one'] + $_GET['two'] + $_GET['three'];

echo "<br>";
/*
 * Получение данных из формы 2-й задачи
 */
echo "name : " . $_POST['user'] . "<br>";
echo "age :  " . $_POST['age'];

echo "<br>";
/*
 * Получение данных из формы 3-й задачи
 */

$pass = '12345';
if ($_POST['pass'] == $pass):
    echo 'Верный пароль';
else:
    echo 'Неверно';
endif;

echo "<br>";
/*
 * Получение данных из форм 4-й задачи
 */

if (!empty($_POST['day'])):
    echo date("l", $_POST['day']);
else:
    echo 'Пусто';
endif;