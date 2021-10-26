<?php
/*
 * Отличаем папку от файла в PHP
 */

/* Задача 1
 * Пусть дан путь. Если путь ведет к папке выведите сообщение об этом.
 */

$path = '/';
if (is_dir($path)):
    echo 'Ведет к папке';
else:
    echo 'Не ведет к папке';
endif;

/* Задача 2
 * Пусть дан путь. Если путь ведет к файлу выведите сообщение об этом.
 */

$path = 'a_file.txt';
if (is_file($path)):
    echo 'Ведет к файлу';
else:
    echo 'не ведет к файлу';
endif;

echo "<br>";
/* Задача 3
 * Дана папка. Выведите на экран столбец имен подпапок из этой папки.
 */

$dir = 'dir';
$files = array_diff(scandir($dir), ['..','.']);

foreach ($files as $file){
    $path = $dir . '/' . $file;

    if (is_dir($path)):
        echo $file . '<br>';
    endif;
}

echo "<br>";
/* Задача 4
 *  Дана папка. Выведите на экран столбец имен файлов из этой папки
 */

$dir = 'dir';
$files = array_diff(scandir($dir), ['..','.']);

foreach ($files as $file){
    $path = $dir . '/' . $file;

    if (is_file($path)):
        echo $file . '<br>';
    endif;
}

/* Задача 5
 * Дана папка. Запишите в конец каждого файла этой папки текущий момент времени.
 */

$dir = 'dir';
$files = array_diff(scandir($dir),['..',['.']]);
$date = date('H:i:s');

foreach ($files as $file){
    $path = $dir . '/' . $file;

    if (is_file($path)){
        file_put_contents($path . $file,$date);
    }
}
?>