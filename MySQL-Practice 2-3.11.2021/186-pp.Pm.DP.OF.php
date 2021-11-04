<?php
/*
 * Оформление вывода из базы данных в PHP
 */

/* Задача 1
 * Выведите записи нашей таблицы в следующем виде
<div>
	<h2>user1</h2>
	<p>
		23 years, <b>400$</b>
	</p>
</div>
<div>
	<h2>user2</h2>
	<p>
		24 years, <b>500$</b>
	</p>
</div>
<div>
	<h2>user3</h2>
	<p>
		25 years, <b>600$</b>
	</p>
</div>
 */

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] =
    $row);
?>

<?php foreach ($data as $elem): ?>
    <div>
        <h2><?=$elem['name']?></h2>
        <p>
            <?=$elem['age'] . ' years'?> <b><?=$elem['salary']. '$'?></b>
        </p>
<?php endforeach; ?>

<?php
/*
 * Задача 2
 * Выведите записи нашей таблицы в следующем виде:
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>
	<tr>
		<td>1</td>
		<td>user1</td>
		<td>23</td>
		<td>400</td>
	</tr>
	<tr>
		<td>2</td>
		<td>user2</td>
		<td>25</td>
		<td>500</td>
	</tr>
	<tr>
		<td>3</td>
		<td>user3</td>
		<td>23</td>
		<td>500</td>
	</tr>
</table>
 */
$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] =
    $row);
?>
        <?php foreach ($data as $users): ?>
        <table>
        <tr>
            <th><?= 'id' ?></th>
            <th><?= 'name' ?></th>
            <th><?= 'age' ?></th>
            <th><?= 'salary' ?></th>
        </tr>


        <tr>
            <td><?= $users['id'] ?></td>
            <td><?= $users['name'] ?></td>
            <td><?= $users['age'] ?></td>
            <td><?= $users['salary'] ?></td>
        </tr>
    </table>

<?php endforeach; ?>

<?php

/* Задача 3
 * Выведите записи нашей таблицы в следующем виде:
<ul>
	<li>user1</li>
	<li>user2</li>
	<li>user3</li>
</ul>
 */

$query = "SELECT * FROM users";
$result = mysqli_query($link,$query) or die (mysqli_error($link));

for ($data= []; $row = mysqli_fetch_assoc($result); $data[] = $row);

?>

<?php foreach ($data as $users) :  ?>

    <ul>
        <li><?= $users['name'] ?></li>
    </ul>

<?php endforeach; ?>