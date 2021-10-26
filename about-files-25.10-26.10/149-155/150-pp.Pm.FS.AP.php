<?php
/*
 * Абсолютные пути в PHP
 */

/* Задача 1
 * Напишите код, который прочитает содержимое текстового файла:
    /script1/
        /script2/
            index.php
    /dir/
        test.txt
 */

$root = $_SERVER['DOCUMENT_ROOT'];
echo file_get_contents($root . '/dir/test.txt');

/* Задача 2
 * Напишите код, который прочитает содержимое текстового файла:
    /script1/
        /script2/
            /script3/
                index.php
    /dir1/
        /dir2/
            /dir3/
                test.txt
 */

$root = $_SERVER['DOCUMENT_ROOT'];
echo file_get_contents($root . '/dir1/dir2/dir3/test.txt');
?>