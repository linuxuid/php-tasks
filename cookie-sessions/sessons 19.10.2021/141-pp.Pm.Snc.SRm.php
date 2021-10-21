<?php
/*
 * Удаление сессий в PHP
 */

/*
 * Задача 1
 * Вот код счетчика из предыдущего урока:
<?php
	session_start();

	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter']++;
	}

	echo $_SESSION['counter'];
?>
 * Модифицируйте этот код так, чтобы при достижении
 * счетчиком значения 10, отсчет начинался сначала.
 */

session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} elseif ($_SESSION['counter'] <= 9) {
    $_SESSION['counter']++;
} else {
    unset($_SESSION['counter']);
}

echo $_SESSION['counter'];

/* Задача 2
 * Сделайте страницу 141-logout.php, при заходе
 * на которую будет завершаться сессия пользователя.
 */



if(isset($_POST['submit']));
session_start();
$_SESSION['new'] = 'newUser';

?>
<form action="141-logout.php" method="POST">
    <input type="submit" name="submit">
</form>
