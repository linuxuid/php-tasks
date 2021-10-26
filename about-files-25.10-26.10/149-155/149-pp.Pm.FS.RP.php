<?php
/*
 * Относительные пути в PHP
 */

/* Задача 1
 * Напишите код, который прочитает содержимое текстового файла:
    index.php
    /dir1/
        /dir2/
            test.txt
 */

echo file_get_contents('dir1/dir2/test.txt');

/* Задача 2
 * Напишите код, который прочитает содержимое текстового файла:
    /script/
        index.php
    /dir1/
        /dir2/
            test.txt
 */

echo file_get_contents('../dir1/dir2/test.txt');

/* Задача 3
 * Напишите код, который прочитает содержимое текстового файла:
    /script1/
        /script2/
            index.php
    /dir/
        test.txt
 */

echo file_get_contents('../../dir/test.txt');

/* Задача 4
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

echo file_get_contents('../../../dir1/dir2/dir3/test.txt');
?>