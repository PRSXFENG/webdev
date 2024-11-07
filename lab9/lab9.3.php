<?php
$product = file_get_contents("product.txt");#read file data as text
echo "$product<br><br>";

$pList = file("product.txt");#read file data as array
print_r($pList);
foreach($pList as $p){
	echo "<br>$p";
}
?>