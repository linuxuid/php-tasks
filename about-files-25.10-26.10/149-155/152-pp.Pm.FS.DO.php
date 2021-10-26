<?php
/*
 * Операции над папками в PHP
 */

/* Задача 1
 * Создайте в корне вашего сайта папку с названием dir.
 */

$directory = mkdir('dir');

/* Задача 2
 * Дан массив со строками. Создайте в корне вашего
 * сайта папки, названиями которых служат элементы этого массива
 */

$arrDir = [
    'dir1',
    'dir2',
    'dir3'
];
foreach ($arrDir as $val):
    $newDir = mkdir($val);
    endforeach;

/* Задача 3
 * Создайте в корне вашего сайта папку с названием test.
 * Затем создайте в этой папке три файла: 1.txt, 2.txt, 3.txt.
 */

$dir = mkdir('test');
$arrTextDocs = [
    'test/1.txt',
    'test/2.txt',
    'test/3.txt'
];
foreach ($arrTextDocs as $item):
    file_put_contents($item,'!');
    endforeach;

/* Задача 4
 * Удалите папку с названием test.
 */

function removeDirectory($dir){
    if ($objs = glob($dir."/*")) {
        foreach ($objs as $obj) {
            is_dir($obj) ? removeDirectory($obj) : unlink($obj);
        }
    }
    rmdir($dir);
}
removeDirectory('test');

/* Задача 5
 * Пусть в корне вашего сайта лежит папка dir. Переименуйте ее на test.
 */

$newNameDir = rename('dir','test');
?>