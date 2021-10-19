<?php
/*
 * Радиокнопки в PHP
 */

/* Задача 1
 * С помощью двух переключателей спросите у пользователя его пол.
 * Выведите результат на экран.
 */
?>

<form action="" method="GET">
    <input type="radio" name="radio" value="1" checked>
    <input type="radio" name="radio" value="2">
    <input type="submit">
</form>

<?php
if (!empty($_GET['radio'] == 1)):
    echo 'есть 18 лет';
else:
    echo 'нет 18 лет';
endif;
?>

<?php
/*
 *  Задача 2
 * С помощью переключателей попросите пользователя выбрать его язык.
 * Сделайте так, чтобы выбор не пропадал после отправки формы.
 */
?>

<form action="" method="GET">
    <input type="hidden" value="0">
    <label> russian : <input type="radio" name="radio" value="1"
            <?php if (!empty($_GET['radio'] and $_GET['radio'] == 1)): echo 'checked'; endif;
            ?>>
    </label>
    <label> english : <input type="radio" name="radio" value="2"
            <?php if (!empty($_GET['radio'] and $_GET['radio'] == 2)): echo 'checked'; endif;;
        ?>>
    </label>
    <label> france : <input type="radio" name="radio" value="3"
            <?php if (!empty($_GET['radio'] and $_GET['radio'] == 3)): echo 'checked'; endif;;
        ?>>
    </label>
    <input type="submit">
</form>

<?php
    if (!empty($_GET['radio'] and $_GET['radio'] == 1)):
        echo 'russian';
    elseif(!empty($_GET['radio'] and $_GET['radio'] == 2)):
        echo 'english';
    else:
        echo 'france';
    endif;
?>
