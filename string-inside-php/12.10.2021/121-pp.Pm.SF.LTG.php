<?php
/*
 * Цикл и генерация тегов в PHP
 */

/* Задача 1
 * С помощью цикла сформируйте следующий HTML код:
<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>
 */

for ($i=1; $i<=5; $i++) {
    echo "<ul> <li>$i</li> </ul>";
}

/* Задача 2
 * Дан массив: $arr = ['text1', 'text2', 'text3'];
 * Сформируйте с его помощью следующий HTML код:
<select>
	<option>text1</option>
	<option>text2</option>
	<option>text3</option>
</select>
 */

$arr = ['text1', 'text2', 'text3'];

foreach ($arr as $item) {
    echo "<select><option>$item<option></select>";
}