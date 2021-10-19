<?php
/*
 * Сохранение значений формы после отправки в PHP
 */

/* Задача 1
 * С помощью формы спросите город и страну пользователя.
 * После отправки формы выведите введенные данные на экран. Сделайте так,
 * чтобы введенные данные не пропадали из инпутов после отправки формы.
 */

?>

<form action="" method="GET">
    <input name="city" value="<?php if (isset($_GET['city'])) echo $_GET['city']?>">
    <input name="country" value="<?php if (isset($_GET['country'])) echo $_GET['country']?>">
    <input type="submit">
</form>

<?php echo $_GET['city']?>
<br>
<?php echo $_GET['country']?>

<?php
/* Задача 2
 * С помощью формы спросите у пользователя год.
 * После отправки определите, этот год високосный или нет.
 * Сделайте так, чтобы при первом заходе на страницу в инпуте уже стоял текущий год.
 */

$year = date('Y');
?>

<form action="" method="POST">
    <input name="year" value="<?php echo $year ?>">
    <input type="submit">
</form>

<?php
if (isset($_POST['year'])):
    if ($_POST['year'] % 4 == 0 && $_POST['year'] % 100 != 0 || $_POST['year'] % 400 == 0):
        echo 'Год високосный';
    else:
        echo 'Год НЕ високосный';
    endif;
    endif;
?>

<?php
/* Задача 3
 * С помощью трех инпутов спросите у пользователя год, месяц и день.
 * После отправки формы выведите на экран,
 * сколько дней осталось от введенной даты до Нового Года.
 * По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата.
 */
$date = date('d/m/Y');
?>
<form action="" method="POST">
    <input name="year" value="<?php echo $date ?>">
    <input name="month" value="<?php echo $date ?>">
    <input name="day" value="<?php echo $date ?>">
    <input type="submit">
</form>

<?php
$_POST = mktime(0,0,0,1,1, $date('Y') + 1);
$sec = $_POST - time();
    if(isset($_POST)):
       $new = floor($sec / (60*60*24));
       echo "До нового года осталось $new ";
    endif;
?>