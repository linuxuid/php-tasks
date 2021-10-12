<?php
/*
 * Цикл и генерация тегов и атрибутов в PHP
 */

/* Задача 1
 * Дан следующий массив:
$arr = [
	['href'=>'page1.html', 'text'=>'text1'],
	['href'=>'page2.html', 'text'=>'text2'],
	['href'=>'page3.html', 'text'=>'text3'],
];
 * Сформируйте с его помощью следующий HTML код:
<ul>
	<li><a href="page1.html">text1</a></li>
	<li><a href="page2.html">text2</a></li>
	<li><a href="page3.html">text3</a></li>
</ul>
 */

$arr = [
    ['href'=>'page1.html', 'text'=>'text1'],
    ['href'=>'page2.html', 'text'=>'text2'],
    ['href'=>'page3.html', 'text'=>'text3'],
];

foreach ($arr as $item) {
    echo "<ul><li><a href=\"{$item['href']}\">\"{$item['text']}\"</a></li></ul>";
}

/* Задача 2
 * Дан следующий массив:
$arr = [
	['value' => '1', 'text' => 'text1'],
	['value' => '2', 'text' => 'text2'],
	['value' => '3', 'text' => 'text3'],
];
 * Сформируйте с его помощью следующий HTML код:
<select>
	<option value="1">text1</option>
	<option value="2">text2</option>
	<option value="3">text3</option>
</select>
 */

$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];

foreach ($arr as $val) {
    echo "<select><option value=\"{$val['value']}\">\"{$val['text']}\"</option></select>";
}