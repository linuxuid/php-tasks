<?php
/*
 * Скрытие формы после отправки в PHP
 */

/* Задача 1
 * С помощью формы спросите имя пользователя.
 * После отправки формы поприветствуйте пользователя по имени, а форму уберите.
 */
if (empty($_GET)):
?>

<form>
    <input name="first_name" placeholder="Имя">
    <input type="submit">
</form>

<?php
else:
    echo $_GET['first_name'];
endif;
?>