<?php
/*
 * Чекбокс в PHP
 */

/* Задача 1
 * Сделайте форму с инпутом и флажком. С помощью инпута спросите у пользователя имя.
 * После отправки формы, если флажок был отмечен,
 * поприветствуйте пользователя, а если не был отмечен - попрощайтесь.
 */
?>
<form action="" method="GET">
    <input type="checkbox" name="flag">
    <input name="username">
    <input type="submit">
</form>

<?php
if (!empty($_GET)):
    if (isset($_GET['flag'])):
        echo 'Привет';
    else:
        echo 'Пока';
    endif;
    endif;
?>

<?php
/* Задача 2
 * С помощью флажка спросите у пользователя, есть ему уже 18 лет или нет.
 * Если есть, разрешите ему доступ на сайт, а если нет - не разрешите.
 */
?>

<form action="" method="GET">
    <p>18 years?</p>
    yes : <input type="checkbox" name="flag" value="0" >
    no : <input type="checkbox" name="flag" value="1" >
    <input type="submit">
</form>

<?php
if (!empty($_GET)):
    if ($_GET['flag'] == 0):
        echo 'enable';
    else:
        echo 'forbidden';
    endif;
    endif;
?>

<?php
/* Задача 3
 * Сделайте три чекбокса, которые будут сохранять свое значение после отправки.
 */
?>

<form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="1" <?php if (!empty($_GET['flag'])) echo 'checked'; ?>>
    <input type="checkbox" name="flag" value="2" <?php if (!empty($_GET['flag'])) echo 'checked'; ?>>
    <input type="checkbox" name="flag" value="3" <?php if (!empty($_GET['flag'])) echo 'checked'; ?>>
    <input type="submit">
</form>

<?php
if (!empty($_GET['flag'])):
    echo 'done';
else:
    echo 'forbidden';
    endif;
?>