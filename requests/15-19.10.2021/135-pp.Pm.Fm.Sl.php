<?php
/*
 * Селекты в PHP
 */

/* Задача 1
 * С помощью выпадающего списка предложите
 * пользователю выбрать страну, в которой он живет.
 */
var_dump($_GET['city']);
?>

<!-- Задача 1 -->
<form action="" method="GET">
    <select name="city">
        <option>russia</option>
        <option>usa</option>
        <option>france</option>
    </select>
    <input type="submit">
</form>

<?php
/*
 *  Задача 2
 *  Атрибут value
 * Объясните, чем удобнее такой подход.
 */

/*
 * ответ : удобнее тем что легче делать проверки обращаться к конкретному input
 */
?>

<?php
/* Задача 3
 * С помощью выпадающего списка попросите пользователя выбрать его язык.
 */
var_dump($_GET['lang']);
?>

<!-- Задача 3 -->
<form action="" method="GET">
    <select name="lang">
        <option>rus</option>
        <option>eng</option>
        <option>fre</option>
    </select>
    <input type="submit">
</form>

<?php
/* Задача 4
 * Модифицируйте предыдущую задачу так,
 * чтобы выбранное значение не исчезало после отправки.
 */
var_dump($_GET['language']);
?>
<form action="" method="GET">
    <select name="language">
        <option value="1" <?php if (!empty($_GET['language'] == 1)) echo 'checked'; ?>>rus</option>
        <option value="2" <?php if (!empty($_GET['language'] == 2)) echo 'checked'; ?>>eng</option>
        <option value="3" <?php if (!empty($_GET['language'] == 3)) echo 'checked'; ?>>fre</option>
    </select>
    <input type="hidden" value="0">
    <input type="submit">
</form>