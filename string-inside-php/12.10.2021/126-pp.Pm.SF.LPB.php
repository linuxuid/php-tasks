<?php
/*
 * Циклы и разрыв PHP кода
 */

/* Задача 1
 * Сформируйте с помощью цикла следующий HTML код:
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>
 */
?>

<!--begin php-->
<?php for ($i=1;$i<=5;$i++): ?>
<ul><?="<li>$i</li>" ?></ul>
<?php endfor; ?>
<!--end php-->

<?php
/* Задача 2
 * Дан массив: $arr = ['user1', 'user2', 'user3'];
 * С помощью этого массива и цикла сформируйте следующий HTML код:
<div>
	<h2>user1</h2>
	<p>text</p>
</div>
<div>
	<h2>user2</h2>
	<p>text</p>
</div>
<div>
	<h2>user3</h2>
	<p>text</p>
</div>
 */
$arr = ['user1', 'user2', 'user3'];
?>

<!--begin php-->
<?php foreach ($arr as $item): ?>
<div>
    <h2><?=$item?></h2>
    <p>text</p>
<?php endforeach; ?>
<!--end php-->

<?php
/* Задача 3
 * Дан массив:
$arr = [
	[
		'name' => 'user1',
		'age'  => 30,
	],
	[
	'name' => 'user2',
	'age'  => 31,
	],
	[
	'name' => 'user3',
	'age'  => 32,
	],
];
 * С помощью этого массива и цикла сформируйте следующий HTML код:
<div>
	<p>name: user1</p>
	<p>age: 30</p>
</div>
<div>
	<p>name: user2</p>
	<p>age: 31</p>
</div>
<div>
	<p>name: user3</p>
	<p>age: 32</p>
</div>
 */
$arr = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];
?>

<!--  begin php  -->
    <?php foreach ($arr as $users): ?>
    <div>
        <p>name:<?= $users['name']?></p>
        <p>age:<?= $users['age']?></p>
    </div>
    <?php endforeach; ?>
<!--  end php  -->