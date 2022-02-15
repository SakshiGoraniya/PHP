<?php

for ($i = 0; $i < 10; $i++){

$product = 10 * $i;

echo "The product of 10 * $i is $product <br/>";
}

echo "<br>";
$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals_list as $array_values){

echo $array_values . "<br>";

}

$i = 0;

while ($i < 5){

echo $i + 1 . "<br>";

$i++;

}
?>