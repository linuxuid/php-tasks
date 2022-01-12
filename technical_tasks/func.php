<?php 
$basket = [
	[
		'position' => 'books of php',
		'quantity' => 1,
	],
	[
		'position' => 'moouse without cabel',
		'quantity' => 12,
	],
];

function countBasket($array = [])
{
	$count = 0;
	foreach($array as $value){
		$count += $value['quantity'];
	}
	return $count;
}
echo countBasket($basket);

?>
