<?php

/*
 * Сумма элементов массива
 */
function getSum($arr){
     $sum = 0;
     foreach ($arr as $val) {
         if (is_array($val)) {
         $sum += getSum($val);
     } else {
         $sum += $val;

        }
    }
    return $sum;
}

?>