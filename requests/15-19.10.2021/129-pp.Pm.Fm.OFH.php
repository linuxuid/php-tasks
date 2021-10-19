<?php
/*
 * Обработка формы в одном файле PHP
 */
?>

<form action="" method="POST">
    <input name="first-name">
    <input name="second-name">
    <input name="patronymic">
    <input type="submit">
</form>

<?php
 if (!empty($_POST)):
    echo $_POST['first_name'] . ' ' . $_POST['second-name'] . ' ' . $_POST['patronymic'];
 else:
    echo 'Пусто';
 endif;
?>
