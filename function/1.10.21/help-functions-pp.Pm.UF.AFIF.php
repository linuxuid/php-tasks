<?php


function getPrimeDivisors($num) {
    $result = [];
    $divs = getOwnDivisors($num);

    foreach ($divs as $div) {
        if (isPrime($div)) {
            $result[] = $div;
        }
    }

    return $result;
}

var_dump(getPrimeDivisors(2));

echo "<br>";
/*
 * Функция для нахождения делителей числа
 */
function getOwnDivisors($num) {
    $divisors = [];
    for ($i = 1; $i< $num; $i++) {
        if ($num % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}

/*
 * Проверка числа простое оно или нет
 */
function isPrime($div) {

    for ($i=2;$i <= sqrt($div); $i++) {
        if ($div % $i == 0) {
            return false;
        }
    }
    return true;
}

