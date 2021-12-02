<?php
/**
 * Передача объектов параметрами
 */

/** Задача 1
 *  Сделайте класс Product, в котором будут приватные свойства name, price и quantity.
 * Пусть все эти свойства будут доступны только для чтения.
 */

/** Задача 2
 * Добавьте в класс Product метод getCost, который будет находить
 * полную стоимость продукта (сумма умножить на количество).
 */

/** Задача 3
 * Сделайте класс Cart. Данный класс будет хранить список
 * продуктов (объектов класса Product)
 * в виде массива. Пусть продукты хранятся в свойстве products.
 */

/** Задача 4
 * Реализуйте в классе Cart метод add для добавления продуктов.
 */

/** Задача 5
 * Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать
 * параметром название удаляемого продукта.
 */

/** Задача 6
 * Реализуйте в классе Cart метод getTotalCost,
 * который будет находить суммарную стоимость продуктов.
 */

/** Задача 7
 * Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное
 * количество продуктов (то есть сумму свойств quantity всех продуктов).
 */

/** Задача 8
 *  Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость
 * продуктов (суммарная стоимость делить на количество всех продуктов).
 */
class Product
{
    private $name;
    private $price;
    private $quantity;

    public function getCost()
    {
        $count = count($this->price);
        $sum = 0;
        foreach ($this->price as $item)
        {
            $sum += $item;
        }
        return $sum * $count;
    }
}

class Cart
{
    private $products= [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remove($name)
    {
        $this->products = $name;
        unset($name);
    }

    public function getTotalCost()
    {
        $sum = 0;
        foreach ($this->product as $item) {
            $sum += $item;
        }
        return $sum;
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->quantity as $item) {
            $sum += $item;
        }
        return $sum;
    }

    public function getAvgPrice()
    {
        $count = count($this->price);
        $sum = 0;
        foreach ($this->price as $item)
        {
            $sum += $item;
        }
        return $sum / $count;
    }
}
$cart = new Cart();

$cart->add('banana');
$cart->add('apple');
var_dump($cart);

echo $cart->getAvgPrice();


