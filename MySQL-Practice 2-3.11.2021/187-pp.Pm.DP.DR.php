<?php
include 'connect_db.php';

/*
 *
 * Удаление данных из БД с помощью GET запросов
 */


?>

<?php
/*
 * Задача 1
 * Сделайте так, чтобы в адресной строке можно было отправить
 * GET запрос с id юзера и этот юзер удалялся из БД.
 */

$del = $_GET['id'];
if(isset($_GET['id'])):

    $query = "DELETE FROM users WHERE id=$del";
    mysqli_query($link, $query) or die(mysqli_error($link));
endif;

?>


<?php
/*
 * Задача 2
 * Модифицируйте предыдущую задачу так, чтобы на странице
 * были ссылки для удаления каждого юзера:
<a href="?del=1">user1</a>
<a href="?del=2">user2</a>
<a href="?del=3">user3</a>
 * Ссылки, конечно же, должны формироваться в цикле из полученных из БД данных.
 */

$del = $_GET['id'];

$query = "SELECT * FROM users";
$res = mysqli_query($link,$query) or die (mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

?>

<?php foreach ($data as $date):?>

    <a href="187-pp.Pm.DP.DR.php?id= . $del"><?= $date['name'] ?></a>

<?php endforeach; ?>

<?php
/*
 * Задача 3
 * Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:
<ul>
	<li>user1 <a href="?del=1">удалить</a></li>
	<li>user2 <a href="?del=2">удалить</a></li>
	<li>user3 <a href="?del=3">удалить</a></li>
</ul>
 */

$del = $_GET['id'];

$query = "SELECT * FROM users";
$res = mysqli_query($link,$query) or die (mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

?>

<?php foreach ($data as $date):?>
    <ul>
        <li><a href="187-pp.Pm.DP.DR.php?id="><?= $date['name'] ?></a></li>
    </ul>
<?php endforeach; ?>




<?php
/*
 * Задача 4
 * Модифицируйте предыдущую задачу так, чтобы у вас был следующий HTML код:
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
	<tr>
		<td>1</td>
		<td>user1</td>
		<td>23</td>
		<td>400</td>
		<td><a href="?del=1">удалить</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td>user2</td>
		<td>25</td>
		<td>500</td>
		<td><a href="?del=2">удалить</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td>user3</td>
		<td>23</td>
		<td>500</td>
		<td><a href="?del=3">удалить</a></td>
	</tr>
</table>
 */

$del = $_GET['id'];

$query = "SELECT * FROM users";
$res = mysqli_query($link,$query) or die (mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

?>

<?php foreach ($data as $date):?>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>salary</th>
            <th>delete</th>
        </tr>
        <tr>
            <td><?= $date['id'] ?></td>
            <td><?= $date['name'] ?></td>
            <td><?= $date['age']?></td>
            <td><?= $date['salary']?></td>
            <td><a href="187-pp.Pm.DP.DR.php?del= . $del">удалить</a></td>
        </tr>
    </table>
<?php endforeach; ?>




