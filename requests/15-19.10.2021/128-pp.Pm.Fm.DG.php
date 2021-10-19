<?php
/*
 * Получение данных форм в PHP
 */
?>

<?php
/* Задача 1
 * Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа.
 * После отправки формы выведите на экран сумму этих чисел.
 */
?>

<!-- input с 3-мя числами метод GET -->
<h2>Задача 1</h2>
<form action="128-result.php" method="GET">
    <input name="one">
    <input name="two">
    <input name="three">
    <input type="submit">
</form>

<?php
/* Задача 2
 * С помощью формы спросите у пользователя его имя и возраст.
 * После отправки формы выведите эти данные на экран.
 */
?>

<!-- input метод POST -->
<h2>Задача 2</h2>
<form action="128-result.php" method="POST">
    <input name="user">
    <input name="age">
    <input type="submit">
</form>

<?php
/* Задача 3
 * Пусть с помощью формы у пользователя спрашивается пароль:

<form action="/result.php" method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form>

 * Пусть на странице с результатом в переменной хранится правильный пароль:
 * $pass = '12345';
 * Сделайте так, чтобы после отправки формы на странице результата сравнивался пароль
 * из переменной и пароль из формы.
 * После сравнения сообщите пользователю, правильный он ввел пароль или нет.
 */
?>
<h2>Задача 3</h2>
<form action="128-result.php" method="POST">
    <input type="password" name="pass">
    <input type="submit">
</form>

<?php
/* Задача 4
 *  С помощью трех инпутов спросите у пользователя год, месяц и день рождения пользователя.
 * После отправки формы определите день недели, в который родился пользователь.
 */
?>
<h2>Задача 4</h2>
<form action="128-result.php" method="POST">
    <input name="year" placeholder="year">
    <input name="month" placeholder="month">
    <input name="day" placeholder="day">
    <input type="submit">
</form>

