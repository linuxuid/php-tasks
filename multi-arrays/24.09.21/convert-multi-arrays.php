<?php
/*
 * Конвертация многомерных массивов в PHP
 * hash : pp.Pm.Md.MAC
 */

/* Задача 1 hash : pp.Pm.Md.MAC.1
 *  Дан список городов и их стран, хранящийся в следующей структуре:
 *  Напишите код, которой переделает структуру данных вот в такую:
 */
$country = [
    [
        'country' => 'Россия',
        'city' =>    'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Минск',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Питер',
    ],
    [
        'country' => 'Россия',
        'city' =>    'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city' =>    'Могилев',
    ],
    [
        'country' => 'Украина',
        'city' =>    'Киев',
    ],
];

$result = [];
foreach ($country as $key => $city) {
        $result[$city['country']][] = $city['city'];

}
/*
 * Вывод
 */
echo "<pre>";
print_r($result);

echo "<br>" . "<hr>";

/* Задача 2 hash : pp.Pm.Md.MAC.2
 * Дан список событий за определенные даты, хранящийся в следующей структуре:
 * Напишите код, которой переделает структуру данных вот в такую:
 */

$dateArr = [
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];

$res = [];
foreach ($dateArr as $date) {
    $res[$date['date']][] = $date['event'];
}
echo "<pre>";
print_r($res);

echo "<br>" . "<hr>";

/* Задача 3 hash : pp.Pm.Md.MAC.3
 * Дан список событий за определенные даты, хранящийся в следующей структуре:
 * Напишите код, которой переделает структуру данных вот в такую:
 */
$oldDate = [
    '2019-12-29'=> ['name1', 'name3', 'name5', 'name7'],
    '2019-12-30'=> ['name4', 'name8', 'name9'],
    '2019-12-31'=> ['name2', 'name6']
];

$newDate = [];
foreach ($oldDate as $key => $item) {
    foreach ($item as $key2 => $item2) {
        $newDate[] = ['date' => $key, 'event' => $item2];
    }
}
echo "<pre>";
print_r($newDate);