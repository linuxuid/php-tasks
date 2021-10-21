<?php
session_start(); //стартуем сессию
//Если есть данные в сессии об пользователе:
	if (!empty($_SESSION)) {
        echo $_SESSION['username']; //выведем имя на экран
        echo $_SESSION['lastname'];
        echo $_SESSION['age'];
    }
?>