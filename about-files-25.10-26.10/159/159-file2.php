<?php
/*
 * Массив делителей
 */

function getDivisors($num) {
    $res = [];

    for ($i=1; $i<=$num; $i++){
        if ($num % $i == 0) :
            $res[] = $i;
        endif;
    }
    return $res;
}


?>