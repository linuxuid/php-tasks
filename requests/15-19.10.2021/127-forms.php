<?php
/*
 * Основы работы с формами в PHP
 */

/* Задача 1
 * Сделайте форму с тремя инпутами, в которые можно ввести имя, возраст и зарплату пользователя.
 */
?>

<!-- form html -->
<form>
   name : <input name="nameuser">
   age: <input name="age">
   salary : <input name="salary">
</form>

<?php
/* Задача 2
 * На странице index.php сделайте форму.
 * Отправьте ее на страницу result.php. Проверьте оба метода отправки формы.
 */
?>
<!-- При отправке на страницу "result.php" метод POST не показывает отправленную форму-->
<!-- При отправке -->
<form action="127-result.php" method="POST">
    name : <input type="text" name="nameuser">
    age: <input type="text" name="age">
    salary : <input type="text" name="salary">
    <input type="submit">
</form>
