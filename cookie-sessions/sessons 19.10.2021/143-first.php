<?php
/*
 *
 * Запись массивов в сессии PHP
 */

/*
 * Задача 1
 * На одной странице с помощью формы спросите у
 * пользователя имя, возраст, зарплату и еще что-нибудь.
 * Запишите эти данные в одну переменную сессии в виде массива.
 * При заходе на другую страницу переберите
 * сохраненные данные циклом и выведите
 * каждый элемент массива в своем теге li тега ul.
 */
if (!empty($_GET)):
    session_start();
    $_SESSION['user'] = $_GET;
endif;
?>

<pre>
<form action="" method="GET">
    <label>name : <input name="username"></label>
    <label>salary : <input name="salary"></label>
    <label>Preferences : <input name="Preference"></label>
    <label>send : <input type="submit"></label>
</form>
</pre>
