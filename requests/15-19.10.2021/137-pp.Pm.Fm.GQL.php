<?php
/*
 * GET запросы с помощью ссылок в PHP
 */
?>

<?php
/*
 * Задача 1
 * Сделайте три ссылки. Пусть первая передает число 1, вторая - число 2, третья - число 3.
 * Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.
 */

echo $_GET['one'];
echo $_GET['two'];
echo $_GET['three'];
?>

    <!-- Задача 1 -->
<form action="" method="GET">
    <a href="?one=1" name="one">один</a>
    <a href="?two=2" name="two">два</a>
    <a href="?three=3" name="three">три</a>
</form>

<?php
/*
 * Задача 2
 * Сформируйте в цикле 10 ссылок. Пусть каждая ссылка передает свое число.
 * Сделайте так, чтобы по нажатию на ссылку на экран выводилось ее число.
 */

$arr = [
        ['href' => '?par1=1', 'text' => 'link1'],
        ['href' => '?par2=2', 'text' => 'link2'],
        ['href' => '?par3=3', 'text' => 'link3'],
        ['href' => '?par4=4', 'text' => 'link4'],
        ['href' => '?par5=5', 'text' => 'link5'],
        ['href' => '?par6=6', 'text' => 'link6'],
        ['href' => '?par7=7', 'text' => 'link7'],
        ['href' => '?par8=8', 'text' => 'link8'],
        ['href' => '?par9=9', 'text' => 'link9'],
        ['href' => '?par10=10', 'text' => 'link10'],
];

foreach ($arr as $elem) {
    echo "<p><a href=\"{$elem['href']}\">\"{$elem['text']}\"</a></p>";

}
$num = implode('', $_GET);
echo $num;
/*
 * GET request
 */
?>

<?php
/*
 * Задача 3
 * Дан массив: $arr = ['a', 'b', 'c', 'd', 'e'];
 * Сделайте так, чтобы с помощью GET запроса можно было вывести любой элемент этого массива.
 * Для этого с помощью цикла foreach сделайте ссылку для каждого элемента массива.
 */

$arr1 = ['a', 'b', 'c', 'd', 'e'];

foreach ($arr1 as $item) {
    echo
    "<form action='' method='GET'>
    <a href='?par1={$item[0]}'>link</a>
    <a href='?par2={$item[1]}'></a>
    <a href='?par3={$item[2]}'></a>
    <a href='?par4={$item[3]}'></a>
    <a href='?par5={$item[4]}'></a>
    </form>";
}
?>
