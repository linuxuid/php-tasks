<?php
/* Задача 3
 * Сделайте страницу admin.php, к которой будут иметь доступ
 * только пользователи со статусом 'admin'.
 */

/* Задача 4
 * Выведите на странице admin.php список всех зарегистрированных пользователей
 * вашего сайта в виде таблицы. Пусть в таблице будут две колонки: логин и статус.
 */

/* Задача 5
 * Модифицируйте предыдущую задачу так, чтобы появилась еще и третья колонка,
 * со ссылкой, с помощью которой админ сможет удалить любого пользователя.
 */

/* Задача 6
 * Модифицируйте предыдущую задачу так, чтобы ряды таблицы
 * с админами красились в красный цвет, а обычными юзерами - в зеленый.
 */

require_once 'connect_db.php';
session_start();

$id = $_GET['id'];

if (isset($_GET['id'])) {
    $query = "DELETE FROM users WHERE id='$id'";
    mysqli_query($link,$query) or die(mysqli_error($link));
}
?>
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
<?php if (!empty($_SESSION['admin'])): ?>
    <p>Информация только для админов</p>
    <p>Список зарегистрированных пользователей</p>
    <?php
        $query = "SELECT * FROM users";
        $result = mysqli_query($link,$query) or die(mysqli_error($link));
        $user = mysqli_fetch_assoc($result);
        ?>
    <?php foreach($user as $status){ ?>
        <table>
            <tr>
                <td><?= $status['status'] ?></td>
                <td><?= $status['login']?></td>
                <td><a href="205-admin.php?id=$id"></a></td>
            </tr>
        </table>
    <?php } ?>
<?php
else:
    echo 'Доступ только для Админов';
endif;
?>
</body>
</html>
