<?php
$result = [];
for ($i = 1; $i <= 2030; $i++) {
    if (getDigitsSum($i) == 13) {
        $result[] = $i;
    }
}

var_dump($result);

function getDigitsSum($num) {
    return array_sum(str_split($num, ''));
}