<?php
/*
 * Вложенные циклы
 */

/* Задача 1
 * С помощью двух вложенных циклов выведите на экран
 * следующую строку : 111222333444555666777888999
 */

// через for
for($i = 1; $i <= 9; $i++){
    for ($j = 1; $j <= 3; $j++) {
        echo $i;
    }
}
echo "<br>";

// Через while
$i = 1;
while ($i <= 9) {
    $i++;
    $j = 1;
    while ($j <= 3) {
        $j++;
        echo $i;
    }

}

echo "<br>" . "<hr>";
/* Задача 2
 * С помощью двух вложенных циклов выведите на экран
 * следующую строку :  11 12 13 21 22 23 31 32 33
 */

// через for
for ($i = 11; $i <= 33; $i++) {
    if ($i <= 13 || $i >= 21){
        for ($j =3; $j <= 3; $j++){
            echo $i . ' ';
        }
    }
}

echo "<br>";

// Через while
$i = 10;
while ($i <= 32) {
    $i++;
    $j = 3;
    if ($i <= 13 || $i >= 21){
    while ($j <= 3){
        $j++;
        echo $i . ' ';
        }
    }
}
