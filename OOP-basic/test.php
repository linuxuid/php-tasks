<?php
ini_set('error_reporting',1);
error_reporting(E_ALL);

function getAvgMeanSum($arr)
{
    $count = count($arr);
    $sum = 0;
    $sum_2 = 0;
    foreach ($arr as $item){
        $sum += $item;
        $sum_2 += pow($item, 2);
    }
    return $sum / $count . ' : ' . sqrt($sum_2) / $count;
}
$arr = [2,4];
echo getAvgMeanSum($arr);
