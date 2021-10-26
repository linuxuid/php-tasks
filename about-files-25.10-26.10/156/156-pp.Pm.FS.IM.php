<?php

/*
 * Деление верстки на элементы в PHP
 */

/* Задача 1
 * Даны файлы со следующей версткой:
<!DOCTYPE html>
<html>
	<head>
		<title>title</title>
	</head>
	<body>
		<header>
			header
		</header>
		<aside>
			sidebar
		</aside>
		<main>
			content
		</main>
		<header>
			footer
		</header>
	</body>
</html>
 * Пусть верстка файлов отличается лишь тайтлами и контентом. Вынесите
 * содержимое хедера, футера и сайдбара в отдельные подключаемые файлы.
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>title</title>
</head>
<body>
<header>
    <?php include '156-header.php';?>
</header>
<aside>
    <?php include '156-aside.php';?>
</aside>
<main>
    <?php include '156-main.php'; ?>
</main>
<header>
    <?php include '156-footer.php';?>
</header>
</body>
</html>
