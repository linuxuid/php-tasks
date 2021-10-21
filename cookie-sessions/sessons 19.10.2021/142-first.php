<?php
/*
 * Задача 1
 * На одной странице с помощью формы спросите у пользователя
 * фамилию, имя и возраст. Запишите эти данные в сессию.
 * При заходе на другую страницу выведите эти данные на экран.
 */
?>

    <form action="" method="GET">
        <input type="text" name="username">
        <input type="text" name="lastname">
        <input type="text" name="age">
        <input type="submit" name="submit">
    </form>

<?php
//Если форма была отправлена и имя не пустое:
if (!empty($_REQUEST['submit'])) {
    session_start(); //стартуем сессию
    $_SESSION['username'] = $_REQUEST['username']; //пишем в сессию
    $_SESSION['lastname'] = $_REQUEST['lastname'];
    $_SESSION['age'] = $_REQUEST['age'];
}
?>