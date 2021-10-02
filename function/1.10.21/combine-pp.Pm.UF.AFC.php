<?php
function getDigit($num) {
    return $num;
}

function getAvg($num2) {
    $div = [];
    for ($i=1; $i< $num2; $i++) {
        if ($num2 % $i == 0) {
            $div[] = $i;
        }
    }
    return array_sum($div) / count($div);
}
var_dump(getAvg(getDigit(6)));

