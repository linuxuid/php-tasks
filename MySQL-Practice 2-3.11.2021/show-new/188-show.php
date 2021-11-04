<?php
include 'connect_db.php';
$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($link,$query) or die (mysqli_error($link));

$user = mysqli_fetch_assoc($result);

?>

<?php
/* Задача 1
 * Реализуйте просмотр юзера с помощью следующей верстки:
<div>
	<p>
		имя: <span class="name">user1</span>
	</p>
	<p>
		возраст: <span class="age">23</span>,
		зарплата: <span class="salary">400$</span>,
	</p>
</div>
 */
?>
    <div>
        <p>
            имя: <span class="name"><?= $user['name'] ?></span>
        </p>
        <p>
            возраст: <span class="age"><?= $user['age'] ?></span>,
            зарплата: <span class="salary"><?= $user['salary']?></span>,
        </p>
    </div>


<?php
/* Задача 2
 * На странице index.php реализуйте вывод ссылок на просмотр каждого из юзеров:
<a href="show.php?id=1">user1</a>
<a href="show.php?id=2">user2</a>
<a href="show.php?id=3">user3</a>
 */

?>

<form action="188-index.php" method="GET">
    <input type="text" name="id">
    <input type="submit">
</form>
