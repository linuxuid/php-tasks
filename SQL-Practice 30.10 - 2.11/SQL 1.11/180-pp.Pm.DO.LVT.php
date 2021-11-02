<?php
include 'connect_db.php';

/*
 * Связывание через таблицу связи в PHP
 */

/* Задача 1
 * Пусть товар может принадлежать нескольким категориям. Распишите структуру хранения.
 */

/* Ответ к задаче 1
 * products - ProductID = 1,2,3,4 ; name = Джинсы, футболки, Куртки, Кроссовки
 * categories - id = 1,2,3,4 ; name = Мужские, Женские, летняя, зимняя
 * products_category - id = 1-16 (AUTO_INCREMENT)
 * product_id = 1 = 1,2,3,4 ; 2 = 1,2,3,4 ; 3 = 1,2,3,4 ; 4 = 1,2,3,4
*/

/* Задача 2
 * Напишите запрос, который достанет товары вместе с их категориями.
 */

$query = 'SELECT products.name as products_name , categories.name as categories_name 
FROM products 
    LEFT JOIN products_category ON products_category.product_id = products.ProductID 
    LEFT JOIN categories ON products_category.category_id = categories.id';

$result = mysqli_query($link,$query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)){
    echo $row['products_name'] . " : " . $row['categories_name'] . "<br>";
}
/* Задача 3
 * Выведите полученные данные в виде списка ul так,
 * чтобы в каждой li вначале стояло имя продукта,
 * а после двоеточия через запятую перечислялись категории этого продукта.
 */
?>

<ul>
    <?php foreach ($result as $item):
        ?>
    <?php endforeach; ?>
    <li><?=$item['products_name'] . " : " . $item['categories_name']?></li>
</ul>
