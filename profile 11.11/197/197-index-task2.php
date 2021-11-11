<?php
/* Задача 2
 * Пусть на нашем сайте есть еще и страница index.php. Сделайте так,
 * чтобы часть этой страницы
 * была открыта для всех пользователей,
 * а часть - только для авторизованных.
 */
?>

<?php session_start(); ?>
<?php if(!empty($_SESSION['auth'])):?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Это текст для авторизованного пользователя</p>
</body>
</html>
<?php else: ?>
    <p>Please, auth</p>
<?php  endif; ?>
