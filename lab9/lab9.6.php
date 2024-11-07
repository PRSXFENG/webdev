<?php
#unpack array content into several variables
list($v1,$v2,$v3,$v4) = array("Cucumber","Potato","Tomato","Carrot");
echo "Labubu Mart offers the following:-";
echo "<br>$v1<br>$v2<br>$v3<br>$v4";

echo "<hr>";
list($id,$name,$place,$price) = file("productInfo.txt");
echo "id: $id<br>";
echo "name: $name<br>";
echo "place: $place<br>";
echo "price: $price<br>";
?>
