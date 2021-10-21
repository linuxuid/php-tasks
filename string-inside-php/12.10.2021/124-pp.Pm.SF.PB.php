<?php
/*
 * Разрыв PHP кода
 */

/* Задача 1
 * Даны три переменные:
	$str1 = 'text1';
	$str2 = 'text2';
	$str3 = 'text3';
 * Также даны три абзаца:
<p></p>
<p></p>
<p></p>
 * Выполните вставку текста переменных в соответствующие абзацы.
 */

$str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
?>

<!-- вывод тэгов -->
<p><?= $str1 ?></p>
<p><?= $str2 ?></p>
<p><?= $str3 ?></p>

<?php
/*
 * вторая задача
 */

/*
 * Дан массив: $arr = ['a' => 1, 'b' => 2, 'c' => 3];
 * Также даны три абзаца:
<p></p>
<p></p>
<p></p>
 * Выполните вставку элементов массива в соответствующие абзацы.
 */
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>

<!-- вывод тэгов -->
<p><?=$arr['a']?></p>
<p><?=$arr['b']?></p>
<p><?=$arr['c']?></p>
