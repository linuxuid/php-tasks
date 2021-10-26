<?php
/*
 * Операции над файлами в PHP
 */

/*
 * Переименовывание
 */

/* Задача 1
 * Пусть в корне вашего сайта лежит файл old.txt.
 * Переименуйте его на new.txt.
 */

$err = rename('old.txt','new.txt');

/*
 * Перемещение
 */

/* Задача 2
 * Пусть в корне вашего сайта лежит файл file.txt. Пусть также в корне
 * вашего сайта лежит папка dir. Переместите файл в эту папку.
 */

$err2 = rename("file.txt","dir/file.txt");

/* Задача 3
 * Пусть в корне вашего сайта лежит папка dir1, а в ней файл file.txt.
 * Пусть также в корне вашего сайта лежит папка dir2. Переместите файл в эту папку.
 */

$err4 = rename("dir1/file.txt","dir2/file.txt");

/*
 * Копирование
 */

/* Задача 4
 * Пусть в корне вашего сайта лежит файл. С помощью цикла положите в папку
 * copy пять копий этого файла. Именем файлов копий пусть будут их порядковые номера.
 */

$file = 'testing.txt';
$copy_to = '/copy/testing%d.txt';
$num_copies = 5;

for ($i=1; $i < $num_copies; $i++) {
    copy($file, sprintf($copy_to, $i));
}

/*
 * Удаление
 */

/* Задача 5
 * Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. Вручную сделайте массив
 * с именами этих файлов. Переберите его циклом и удалите все эти файлы.
 */

$arr = ['1.txt','2.txt','3.txt'];
foreach ($arr as $value){
    unlink($value);
}

/*
 * Размер файла
 */

/* Задача 6
 * Пусть в корне вашего сайта лежит файл. Узнайте его размер, выведите на экран.
 */

echo filesize('size.txt');

/* Задача 7
 *  Модифицируйте предыдущую задачу так, чтобы размер файла выводился в килобайтах.
 */
$filesize = filesize('size.txt');

if ($filesize > 1024){
    echo $filesize / 1024;
}

// аргументов функции будет путь к файлу
function get_filesize($file)
{
    if(!file_exists($file)) return "Файл  не найден";
    $filesize = filesize($file);
    // Если размер больше 1 Кб
    if($filesize > 1024)
    {
        $filesize = ($filesize/1024);
        // Если размер файла больше Килобайта
        // то лучше отобразить его в Мегабайтах. Пересчитываем в Мб
        if($filesize > 1024)
        {
            $filesize = ($filesize/1024);
            // если файл больше 1 Мегабайта, то проверяем
            // Не больше ли он 1 Гигабайта
            if($filesize > 1024)
            {
                $filesize = ($filesize/1024);
                $filesize = round($filesize, 1);
                return $filesize." ГБ";
            }
            else
            {
                $filesize = round($filesize, 1);
                return $filesize." MБ";
            }
        }
        else
        {
            $filesize = round($filesize, 1);
            return $filesize." Кб";
        }
    }
    else
    {
        $filesize = round($filesize, 1);
        return $filesize." байт";
    }
}

/* Задача 8
 *  Положите в корень вашего сайта какую-нибудь картинку размером более мегабайта.
 * Узнайте размер этого файла и переведите его в мегабайты.
 */

$size = get_filesize('photo.jpg');
// echo "size file is : $size";

/* Задача 9
 * Положите в корень вашего сайта какой-нибудь фильм размером более гигабайта.
 * Узнайте размер этого файла и переведите его в гигабайты.
 */

$size = get_filesize('cinema..mp4');

/*
 * Проверка существования
 */

/* Задача 10
 * Проверьте, лежит ли в корне вашего сайта файл file.txt.
 */

if (file_exists('file.txt')):
    echo 'exist';
else:
    echo 'not exist';
endif;

/* Задача 11
 * Проверьте, лежит ли в корне вашего сайта файл file.txt.
 * Если нет - создайте его и запишите в него текст '!
 */

if (file_exists('file.txt')):
    echo 'exist';
else:
    file_put_contents('file.txt', '!');
    $read = file_get_contents('file.txt');
endif;

/* Задача 12
 * Проверьте, лежит ли в корне вашего сайта файл message.txt.
 * Если такой файл есть - выведите текст этого файла на экран.
 */

if (file_exists('message.txt')):
    echo file_get_contents('message.txt');
else:
    echo 'not exist';
endif;
?>